<?php

class backofficeModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function listarAsignaciones($parejaId)
    {
        $sql = "SELECT
                    top.obsequio_pareja_id AS id,
                    top.obsequio_id,
                    top.pareja_id,
                    top.cantidad AS cupos,
                    top.activo,
                    top.fecha_creacion,
                    o.nombre,
                    o.monto,
                    o.imagen,
                    tc.nombre AS categoria,
                    tc.categoria_id,
                    COALESCE(SUM(CASE WHEN toe.activo = 1 THEN toe.cantidad_items ELSE 0 END), 0) AS progreso
                FROM tbl_obsequio_pareja top
                INNER JOIN tbl_obsequio o ON o.obsequio_id = top.obsequio_id
                INNER JOIN tbl_categoria tc ON tc.categoria_id = o.categoria_id
                LEFT JOIN tbl_obsequio_enviado toe ON toe.obsequio_pareja_id = top.obsequio_pareja_id
                WHERE top.pareja_id = :parejaId
                GROUP BY top.obsequio_pareja_id
                ORDER BY top.obsequio_pareja_id DESC";

        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':parejaId', (int) $parejaId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function listarCatalogo($q = '', $categoriaId = 0, $limit = 400)
    {
        $where = " WHERE 1=1 ";
        $params = array();

        if ($categoriaId > 0) {
            $where .= " AND o.categoria_id = :categoriaId ";
            $params[':categoriaId'] = (int) $categoriaId;
        }

        if ($q !== '') {
            $where .= " AND o.nombre LIKE :q ";
            $params[':q'] = '%' . $q . '%';
        }

        $limit = max(1, min(500, (int) $limit));

        $sql = "SELECT
                    o.obsequio_id,
                    o.nombre,
                    o.monto,
                    o.imagen,
                    o.categoria_id,
                    o.activo,
                    o.fecha_creacion,
                    tc.nombre AS categoria
                FROM tbl_obsequio o
                INNER JOIN tbl_categoria tc ON tc.categoria_id = o.categoria_id
                $where
                ORDER BY o.obsequio_id DESC
                LIMIT $limit";

        $stmt = $this->_db->prepare($sql);
        foreach ($params as $key => $value) {
            $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
            $stmt->bindValue($key, $value, $type);
        }
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function obtenerObsequio($obsequioId)
    {
        $sql = "SELECT obsequio_id, categoria_id, imagen, nombre, monto, activo
                FROM tbl_obsequio
                WHERE obsequio_id = :id
                LIMIT 1";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':id', (int) $obsequioId, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row ? $row : null;
    }

    public function listarCategorias($soloActivas = true)
    {
        $sql = "SELECT categoria_id AS id, nombre, activo
                FROM tbl_categoria";
        if ($soloActivas) {
            $sql .= " WHERE activo = 1";
            $sql .= " ORDER BY nombre ASC";
        } else {
            $sql .= " ORDER BY categoria_id DESC";
        }
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function obtenerCategoria($categoriaId)
    {
        $sql = "SELECT categoria_id AS id, nombre, activo
                FROM tbl_categoria
                WHERE categoria_id = :id
                LIMIT 1";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':id', (int) $categoriaId, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row ? $row : null;
    }

    public function crearCategoria($nombre, $activo = 1)
    {
        $sql = "INSERT INTO tbl_categoria (nombre, activo)
                VALUES (:nombre, :activo)";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':activo', (int) $activo, PDO::PARAM_INT);
        $stmt->execute();
        return (int) $this->_db->lastInsertId();
    }

    public function actualizarCategoria($categoriaId, $nombre, $activo)
    {
        $sql = "UPDATE tbl_categoria
                SET nombre = :nombre, activo = :activo
                WHERE categoria_id = :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':activo', (int) $activo, PDO::PARAM_INT);
        $stmt->bindValue(':id', (int) $categoriaId, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function desactivarCategoria($categoriaId)
    {
        $sql = "UPDATE tbl_categoria
                SET activo = 0
                WHERE categoria_id = :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':id', (int) $categoriaId, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function crearObsequio($categoriaId, $imagen, $nombre, $monto, $activo = 1)
    {
        $sql = "INSERT INTO tbl_obsequio (categoria_id, imagen, nombre, monto, activo)
                VALUES (:categoriaId, :imagen, :nombre, :monto, :activo)";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':categoriaId', (int) $categoriaId, PDO::PARAM_INT);
        $stmt->bindValue(':imagen', $imagen, PDO::PARAM_STR);
        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':monto', $monto, PDO::PARAM_STR);
        $stmt->bindValue(':activo', (int) $activo, PDO::PARAM_INT);
        $stmt->execute();
        return (int) $this->_db->lastInsertId();
    }

    public function actualizarObsequio($obsequioId, $categoriaId, $imagen, $nombre, $monto, $activo = 1)
    {
        $sql = "UPDATE tbl_obsequio
                SET categoria_id = :categoriaId,
                    imagen = :imagen,
                    nombre = :nombre,
                    monto = :monto,
                    activo = :activo
                WHERE obsequio_id = :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':categoriaId', (int) $categoriaId, PDO::PARAM_INT);
        $stmt->bindValue(':imagen', $imagen, PDO::PARAM_STR);
        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':monto', $monto, PDO::PARAM_STR);
        $stmt->bindValue(':activo', (int) $activo, PDO::PARAM_INT);
        $stmt->bindValue(':id', (int) $obsequioId, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function asignar($parejaId, $obsequioId, $cantidad)
    {
        $sqlCheck = "SELECT obsequio_pareja_id
                     FROM tbl_obsequio_pareja
                     WHERE pareja_id = :parejaId
                       AND obsequio_id = :obsequioId
                     LIMIT 1";
        $stmt = $this->_db->prepare($sqlCheck);
        $stmt->bindValue(':parejaId', (int) $parejaId, PDO::PARAM_INT);
        $stmt->bindValue(':obsequioId', (int) $obsequioId, PDO::PARAM_INT);
        $stmt->execute();
        $existente = $stmt->fetch();

        if ($existente) {
            $sql = "UPDATE tbl_obsequio_pareja
                    SET cantidad = :cantidad, activo = 1
                    WHERE obsequio_pareja_id = :id";
            $stmt = $this->_db->prepare($sql);
            $stmt->bindValue(':cantidad', (int) $cantidad, PDO::PARAM_INT);
            $stmt->bindValue(':id', (int) $existente['obsequio_pareja_id'], PDO::PARAM_INT);
            return $stmt->execute();
        }

        $sql = "INSERT INTO tbl_obsequio_pareja (obsequio_id, pareja_id, cantidad, activo)
                VALUES (:obsequioId, :parejaId, :cantidad, 1)";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':obsequioId', (int) $obsequioId, PDO::PARAM_INT);
        $stmt->bindValue(':parejaId', (int) $parejaId, PDO::PARAM_INT);
        $stmt->bindValue(':cantidad', (int) $cantidad, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function actualizar($obsequioParejaId, $cantidad, $activo)
    {
        $sql = "UPDATE tbl_obsequio_pareja
                SET cantidad = :cantidad, activo = :activo
                WHERE obsequio_pareja_id = :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':cantidad', (int) $cantidad, PDO::PARAM_INT);
        $stmt->bindValue(':activo', (int) $activo, PDO::PARAM_INT);
        $stmt->bindValue(':id', (int) $obsequioParejaId, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function desactivar($obsequioParejaId)
    {
        $sql = "UPDATE tbl_obsequio_pareja
                SET activo = 0
                WHERE obsequio_pareja_id = :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':id', (int) $obsequioParejaId, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function perteneceAPareja($obsequioParejaId, $parejaId)
    {
        $sql = "SELECT obsequio_pareja_id
                FROM tbl_obsequio_pareja
                WHERE obsequio_pareja_id = :id AND pareja_id = :parejaId
                LIMIT 1";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':id', (int) $obsequioParejaId, PDO::PARAM_INT);
        $stmt->bindValue(':parejaId', (int) $parejaId, PDO::PARAM_INT);
        $stmt->execute();
        return (bool) $stmt->fetch();
    }

    /**
     * Credenciales Izipay exclusivas de una boda (sede_id = pareja_id).
     * Sin fallback a otras empresas.
     */
    public function obtenerIzipay($parejaId)
    {
        $parejaId = (int) $parejaId;
        if ($parejaId < 1) {
            return false;
        }

        $sql = "SELECT
                    s.sede_id,
                    e.emp_id,
                    e.emp_username AS username,
                    e.emp_defpas AS defpas,
                    e.emp_defpk AS defpk,
                    e.emp_defsha AS defsha
                FROM tbl_sede s
                INNER JOIN tbl_empresa e ON e.emp_id = s.sede_emp_id
                WHERE s.sede_id = :parejaId
                LIMIT 1";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':parejaId', $parejaId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Garantiza empresa+sede 1:1 para la boda. Nunca reutiliza la empresa de otra sede.
     */
    public function asegurarEmpresaSedePareja($parejaId, $nombre)
    {
        $parejaId = (int) $parejaId;
        $nombre = trim((string) $nombre);
        if ($parejaId < 1) {
            throw new Exception('ID de pareja inválido.');
        }
        if ($nombre === '') {
            $nombre = 'Boda #' . $parejaId;
        }

        $existente = $this->obtenerIzipay($parejaId);
        if ($existente) {
            return $existente;
        }

        $this->_db->beginTransaction();
        try {
            $chkSede = $this->_db->prepare("SELECT sede_id, sede_emp_id FROM tbl_sede WHERE sede_id = :id LIMIT 1 FOR UPDATE");
            $chkSede->bindValue(':id', $parejaId, PDO::PARAM_INT);
            $chkSede->execute();
            $sede = $chkSede->fetch();

            if ($sede) {
                // Sede existe pero sin join válido: no reasignar a empresa ajena; crear empresa propia.
                $empId = (int) $sede['sede_emp_id'];
                $chkEmp = $this->_db->prepare("SELECT emp_id FROM tbl_empresa WHERE emp_id = :id LIMIT 1");
                $chkEmp->bindValue(':id', $empId, PDO::PARAM_INT);
                $chkEmp->execute();
                if (!$chkEmp->fetch()) {
                    $empId = $this->crearEmpresaIzipay($parejaId, $nombre);
                    $upd = $this->_db->prepare("UPDATE tbl_sede SET sede_emp_id = :empId, sede_descripcion = :nom, sede_nom = :nom2 WHERE sede_id = :id");
                    $upd->execute(array(
                        ':empId' => $empId,
                        ':nom' => $nombre,
                        ':nom2' => $nombre,
                        ':id' => $parejaId,
                    ));
                }
            } else {
                $empId = $this->crearEmpresaIzipay($parejaId, $nombre);
                $insSede = $this->_db->prepare(
                    "INSERT INTO tbl_sede (sede_id, sede_descripcion, sede_nom, sede_emp_id, sede_estado, sede_fecreg, sede_horreg)
                     VALUES (:id, :desc, :nom, :empId, 1, :fec, :hor)"
                );
                $insSede->execute(array(
                    ':id' => $parejaId,
                    ':desc' => $nombre,
                    ':nom' => $nombre,
                    ':empId' => $empId,
                    ':fec' => date('Y-m-d'),
                    ':hor' => date('H:i:s'),
                ));
            }

            $this->_db->commit();
        } catch (Exception $e) {
            if ($this->_db->inTransaction()) {
                $this->_db->rollBack();
            }
            throw $e;
        }

        $cred = $this->obtenerIzipay($parejaId);
        if (!$cred) {
            throw new Exception('No se pudo crear el espacio Izipay de esta boda.');
        }
        return $cred;
    }

    private function crearEmpresaIzipay($parejaId, $nombre)
    {
        $parejaId = (int) $parejaId;
        $chk = $this->_db->prepare("SELECT emp_id FROM tbl_empresa WHERE emp_id = :id LIMIT 1");
        $chk->bindValue(':id', $parejaId, PDO::PARAM_INT);
        $chk->execute();
        if ($chk->fetch()) {
            // emp_id ocupado por otra lógica: crear empresa nueva (auto id) exclusiva
            $ins = $this->_db->prepare(
                "INSERT INTO tbl_empresa (emp_razsoc, emp_nomcom, emp_ciudad, emp_est, emp_username, emp_defpas, emp_defpk, emp_defsha, emp_fecreg)
                 VALUES (:raz, :nom, 'AREQUIPA', 1, '', '', '', '', :fec)"
            );
            $ins->execute(array(
                ':raz' => $nombre,
                ':nom' => $nombre,
                ':fec' => date('Y-m-d'),
            ));
            return (int) $this->_db->lastInsertId();
        }

        $ins = $this->_db->prepare(
            "INSERT INTO tbl_empresa (emp_id, emp_razsoc, emp_nomcom, emp_ciudad, emp_est, emp_username, emp_defpas, emp_defpk, emp_defsha, emp_fecreg)
             VALUES (:id, :raz, :nom, 'AREQUIPA', 1, '', '', '', '', :fec)"
        );
        $ins->execute(array(
            ':id' => $parejaId,
            ':raz' => $nombre,
            ':nom' => $nombre,
            ':fec' => date('Y-m-d'),
        ));
        return $parejaId;
    }

    /**
     * Actualiza Izipay SOLO de la empresa ligada a sede_id = parejaId.
     * Campos vacíos en password/sha conservan el valor actual.
     */
    public function actualizarIzipay($parejaId, $username, $defpas, $defpk, $defsha)
    {
        $parejaId = (int) $parejaId;
        $cred = $this->obtenerIzipay($parejaId);
        if (!$cred) {
            throw new Exception('Esta boda no tiene empresa Izipay aislada.');
        }

        $empId = (int) $cred['emp_id'];
        $username = trim((string) $username);
        $defpk = trim((string) $defpk);
        $defpas = trim((string) $defpas);
        $defsha = trim((string) $defsha);

        if ($username === '' || $defpk === '') {
            throw new Exception('Usuario (shop ID) y clave pública son obligatorios.');
        }

        if ($defpas === '') {
            $defpas = $cred['defpas'];
        }
        if ($defsha === '') {
            $defsha = $cred['defsha'];
        }
        if ($defpas === '' || $defsha === '') {
            throw new Exception('Clave privada y HMAC-SHA-256 son obligatorias (primera configuración).');
        }

        // Doble candado: sede de esta boda + emp_id exacto de esa sede
        $sql = "UPDATE tbl_empresa e
                INNER JOIN tbl_sede s ON s.sede_emp_id = e.emp_id
                SET
                    e.emp_username = :username,
                    e.emp_defpas = :defpas,
                    e.emp_defpk = :defpk,
                    e.emp_defsha = :defsha
                WHERE s.sede_id = :parejaId
                  AND e.emp_id = :empId";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':defpas', $defpas, PDO::PARAM_STR);
        $stmt->bindValue(':defpk', $defpk, PDO::PARAM_STR);
        $stmt->bindValue(':defsha', $defsha, PDO::PARAM_STR);
        $stmt->bindValue(':parejaId', $parejaId, PDO::PARAM_INT);
        $stmt->bindValue(':empId', $empId, PDO::PARAM_INT);
        $ok = $stmt->execute();
        return $ok && $stmt->rowCount() >= 0;
    }
}
