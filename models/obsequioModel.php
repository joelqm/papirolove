<?php

require_once "libs/PHPMailer/src/Exception.php";
require_once "libs/PHPMailer/src/PHPMailer.php";
require_once "libs/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class obsequioModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function obtenerObsequiosPareja($parejaId, $categoriaId = 0)
{


    $where = "";
    $params = [':parejaId' => $parejaId];

    if ($categoriaId != 0) {
        $where .= " AND tc.categoria_id = :categoriaId";
        $params[':categoriaId'] = $categoriaId;
    }

    $sql = "
        SELECT
            top.obsequio_pareja_id as id,
            o.nombre as nombreObsequio,
            tc.nombre as nombreCategoria,
            top.cantidad as cupos,
            o.imagen as imagenObsequio,
            o.monto as montoObsequio,
            COALESCE(SUM(CASE WHEN toe.activo = 1 THEN toe.cantidad_items ELSE 0 END), 0) as progreso,
            tc.categoria_id as categoria_id
        FROM
            tbl_obsequio_pareja top
        INNER JOIN tbl_obsequio o ON
            o.obsequio_id = top.obsequio_id
        INNER JOIN tbl_categoria tc ON
            tc.categoria_id = o.categoria_id
        LEFT JOIN tbl_obsequio_enviado toe ON
            toe.obsequio_pareja_id = top.obsequio_pareja_id
        WHERE
            top.activo = 1
            AND top.pareja_id = :parejaId
            $where
        GROUP BY
            top.obsequio_pareja_id
    ";

    try {
        $stmt = $this->_db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error al obtener obsequios de la pareja: " . $e->getMessage());
        return false;
    }
}

    public function obtenerObsequiosParejaCategoria()
    {
        $sql = "SELECT
                    tc.categoria_id AS id,
                    tc.nombre AS nombre
                FROM tbl_categoria tc
                WHERE tc.activo = 1";

        try {
            $stmt = $this->_db->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Manejo de errores
            error_log("Error al obtener categorías de obsequio: " . $e->getMessage());
            return false;
        }
    }
    public function obtenerObsequiosRecibidos($id)
    {
        $sql = "SELECT
                    toe.cantidad_items AS cantidad, 
                    toe.valor_unitario AS valorUnitario,
                    toe.valor_total AS valortotal,
                    to2.nombre AS nombre 
                FROM tbl_obsequio_enviado toe
                JOIN tbl_obsequio_pareja top ON 
                    top.obsequio_pareja_id = toe.obsequio_pareja_id 
                JOIN tbl_obsequio to2 ON
                    to2.obsequio_id = top.obsequio_id 
                JOIN tbl_mensaje tm ON
                    tm.m_codigo = toe.mensaje_id 
                WHERE toe.activo = 1 
                AND tm.m_id = :id";
    
        try {
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Manejo de errores
            error_log("Error al obtener obsequios recibidos: " . $e->getMessage());
            return false;
        }
    }
    
    public function guardarObsequio($mensajeId, $obsequios) {
        try {
            $this->_db->beginTransaction();

            $query = $this->_db->prepare("INSERT INTO tbl_obsequio_enviado (mensaje_id, cantidad_items, valor_unitario, valor_total, obsequio_pareja_id) VALUES (:mensaje_id, :cantidad_items, :valor_unitario, :valor_total, :obsequio_pareja_id)");

            foreach ($obsequios as $obsequio) {
                $query->bindParam(':mensaje_id', $mensajeId, PDO::PARAM_INT);
                $query->bindParam(':cantidad_items', $obsequio['obsequioCantidad'], PDO::PARAM_INT);
                $query->bindParam(':valor_unitario', $obsequio['obsequioPrecio'], PDO::PARAM_STR);
                $query->bindParam(':valor_total', $obsequio['subtotal'], PDO::PARAM_STR);
                $query->bindParam(':obsequio_pareja_id', $obsequio['obsequioId'], PDO::PARAM_INT);
                $query->execute();
            }

            $this->_db->commit();
            return true;
        } catch (Exception $e) {
            $this->_db->rollBack();
            return false;
        }
    }

    public function save($mensajeId, $obsequioCantidad, $obsequioPrecio, $subtotal, $obsequioId) {
        try {
            $this->_db->beginTransaction();

            $query = $this->_db->prepare("INSERT INTO tbl_obsequio_enviado (mensaje_id, cantidad_items, valor_unitario, valor_total, obsequio_pareja_id) VALUES (:mensaje_id, :cantidad_items, :valor_unitario, :valor_total, :obsequio_pareja_id)");

            $query->bindParam(':mensaje_id', $mensajeId, PDO::PARAM_INT);
            $query->bindParam(':cantidad_items', $obsequioCantidad, PDO::PARAM_INT);
            $query->bindParam(':valor_unitario', $obsequioPrecio, PDO::PARAM_STR);
            $query->bindParam(':valor_total', $subtotal, PDO::PARAM_STR);
            $query->bindParam(':obsequio_pareja_id', $obsequioId, PDO::PARAM_INT);
            $query->execute();

            $this->_db->commit();
            return true;
        } catch (Exception $e) {
            $this->_db->rollBack();
            return false;
        }
    }



}

?>