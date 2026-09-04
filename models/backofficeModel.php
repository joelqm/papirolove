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
}
