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
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($rows as &$row) {
                if (isset($row['imagenObsequio'])) {
                    $row['imagenObsequio'] = $this->normalizarImagenObsequio($row['imagenObsequio']);
                }
            }
            unset($row);

            return $rows;
        }
        catch (PDOException $e) {
            error_log("Error al obtener obsequios de la pareja: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Reescribe URLs rotas hacia PNG locales en views/layout/neela/images/.
     */
    private function normalizarImagenObsequio($url)
    {
        $url = trim(str_replace(array("\r", "\n"), '', (string) $url));
        if ($url === '') {
            return $url;
        }

        $host = strtolower((string) parse_url($url, PHP_URL_HOST));
        $path = (string) parse_url($url, PHP_URL_PATH);

        $hostsLocales = array(
            'img.celebremos.pe',
            'celebremos.pe',
            'www.celebremos.pe',
            'papirolove.pe',
            'www.papirolove.pe',
            'papiolove.pe',
            'www.papiolove.pe',
        );

        $esRutaObsequio = $path !== '' && (
            strpos($path, '/resource/obsequios/') !== false
            || strpos($path, '/neela/images/') !== false
            || strpos($path, '/reels/images/') !== false
        );

        if ($host === '' || !in_array($host, $hostsLocales, true) || !$esRutaObsequio) {
            return $url;
        }

        $filename = basename($path);
        $baseName = preg_replace('/\.(png|jpe?g|gif|webp)$/i', '', $filename);

        // Corrige nombres donde se borró la letra "r" (ej. libre->libe, lavadora->lavadoa)
        $alias = array(
            'obsequio-libe' => 'obsequio-libre',
            'cabecea-cama-king' => 'cabecera-cama-king',
            'mesa-cento' => 'mesa-centro',
            'cento-entetenimiento' => 'centro-entretenimiento',
            'alfomba' => 'alfombra',
            'olla-pesion' => 'olla-presion',
            'aspiadoa-inalambica' => 'aspiradora-inalambrica',
            'hidolavadoa' => 'hidrolavadora',
            'lavadoa' => 'lavadora',
            'taslados' => 'traslados',
            'aspiadoa-obot' => 'aspiradora-robot',
            'cafetea' => 'cafetera',
            'sesion_fotogafica' => 'sesion_fotografica',
            'cena_anivesaio' => 'cena_aniversario',
            'juego-comedo' => 'juego-comedor',
        );
        if (isset($alias[$baseName])) {
            $baseName = $alias[$baseName];
        }

        $localDir = ROOT . 'views' . DS . 'layout' . DS . 'neela' . DS . 'images' . DS;
        $publicBase = rtrim(BASE_URL, '/') . '/views/layout/neela/images/';

        $candidatos = array($baseName . '.png', $baseName . '.jpg', $baseName . '.webp', $filename, $baseName);
        foreach ($candidatos as $candidato) {
            if ($candidato !== '' && is_file($localDir . $candidato)) {
                return $publicBase . $candidato;
            }
        }

        return $publicBase . $baseName . '.png';
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
        }
        catch (PDOException $e) {
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
        }
        catch (PDOException $e) {
            // Manejo de errores
            error_log("Error al obtener obsequios recibidos: " . $e->getMessage());
            return false;
        }
    }

    public function guardarObsequio($mensajeId, $obsequios)
    {
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
        }
        catch (Exception $e) {
            $this->_db->rollBack();
            return false;
        }
    }

    public function borrarPendientesDeMensaje($mensajeId)
    {
        $query = $this->_db->prepare("DELETE FROM tbl_obsequio_enviado WHERE mensaje_id = :mensaje_id AND activo = 0");
        $query->bindParam(':mensaje_id', $mensajeId, PDO::PARAM_INT);
        return $query->execute();
    }

    public function save($mensajeId, $obsequioCantidad, $obsequioPrecio, $subtotal, $obsequioId)
    {
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
        }
        catch (Exception $e) {
            $this->_db->rollBack();
            return false;
        }
    }



}

?>