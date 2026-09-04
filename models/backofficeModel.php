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
                ORDER BY top.activo DESC, tc.nombre ASC, o.nombre ASC";

        $stmt = $this->_db->prepare($sql);
        $stmt->bindValue(':parejaId', (int) $parejaId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function listarCatalogo($q = '', $categoriaId = 0)
    {
        $where = " WHERE o.activo = 1 ";
        $params = array();

        if ($categoriaId > 0) {
            $where .= " AND o.categoria_id = :categoriaId ";
            $params[':categoriaId'] = (int) $categoriaId;
        }

        if ($q !== '') {
            $where .= " AND o.nombre LIKE :q ";
            $params[':q'] = '%' . $q . '%';
        }

        $sql = "SELECT
                    o.obsequio_id,
                    o.nombre,
                    o.monto,
                    o.imagen,
                    o.categoria_id,
                    tc.nombre AS categoria
                FROM tbl_obsequio o
                INNER JOIN tbl_categoria tc ON tc.categoria_id = o.categoria_id
                $where
                ORDER BY tc.nombre ASC, o.nombre ASC
                LIMIT 300";

        $stmt = $this->_db->prepare($sql);
        foreach ($params as $key => $value) {
            $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
            $stmt->bindValue($key, $value, $type);
        }
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function listarCategorias()
    {
        $sql = "SELECT categoria_id AS id, nombre
                FROM tbl_categoria
                WHERE activo = 1
                ORDER BY nombre ASC";
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
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
