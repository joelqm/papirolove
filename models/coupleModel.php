<?php

require_once "libs/PHPMailer/src/Exception.php";
require_once "libs/PHPMailer/src/PHPMailer.php";
require_once "libs/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\Exception;

class coupleModel extends Model
{

	public function __construct()
	{
		parent::__construct();
	}


	public function g_ao($ao)
	{

		$sql = "SELECT m_id FROM tbl_mensaje WHERE m_codigo = $ao";

		$rptaSql = $this->_db->query($sql);

		return $rptaSql->fetchAll();

	}

	public function keysEmp($idSed)
	{
		$idSed = (int) $idSed;
		if ($idSed < 1) {
			return false;
		}

		// Solo la empresa de esta sede/boda. Sin fallback a otras credenciales.
		$sql = "SELECT
					e.emp_username AS username,
					e.emp_defpas AS defpas,
					e.emp_defpk AS defpk,
					e.emp_defsha AS defsha
				FROM
					tbl_empresa e
				INNER JOIN tbl_sede s ON s.sede_emp_id = e.emp_id
				WHERE s.sede_id = :sedeId
				LIMIT 1";

		$stmt = $this->_db->prepare($sql);
		$stmt->bindValue(':sedeId', $idSed, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	/**
	 * Credenciales Izipay de la boda dueña del mensaje (m_empresa), nunca de otra.
	 */
	public function keysEmpPorCodigoMensaje($codigo)
	{
		$codigo = trim((string) $codigo);
		if ($codigo === '') {
			return false;
		}

		$stmt = $this->_db->prepare(
			"SELECT m_empresa FROM tbl_mensaje WHERE m_codigo = :codigo ORDER BY m_id ASC LIMIT 1"
		);
		$stmt->bindValue(':codigo', $codigo, PDO::PARAM_STR);
		$stmt->execute();
		$row = $stmt->fetch();
		if (!$row || $row['m_empresa'] === '' || $row['m_empresa'] === null) {
			return false;
		}

		return $this->keysEmp((int) $row['m_empresa']);
	}

	public function guardarmensaje($ao, $nombre, $mensaje, $empresa)
	{

		// var_dump($ao,$nombre,$mensaje,$firma);
		// exit;

		$fecreg = date('Y-m-d');
		$horreg = date('H:i:s');
		$fechor = date('Y-m-d H:i:s');

		$sql = "INSERT INTO tbl_mensaje(
		m_estado,
		m_codigo,
		m_fecreg,
		m_nombre,
		m_mensaje,
		m_monto,
		m_ip,
		m_empresa,
		m_hora
		)
		VALUES
		(
		:estado,
		:codigo,
		:fecreg,
		:nombre,
		:mensaje,
		:monto,
		:ip,
		:empresa,
		:hora
		)";

		$rptaSql = $this->_db->prepare($sql)
			->execute(array(
				':estado' => '1',
				':codigo' => $ao,
				':fecreg' => $fecreg,
				':nombre' => $nombre,
				':mensaje' => $mensaje,
				':monto' => '0',
				':ip' => $_SERVER["REMOTE_ADDR"],
				':empresa' => $empresa,
				':hora' => $horreg
			));

		return $rptaSql;

	}

	public function guardarmensajeMonto($ao, $nombre, $mensaje, $monto, $empresa)
	{

		$fecreg = date('Y-m-d');
		$horreg = date('H:i:s');
		$ip = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '';

		try {
			$this->_db->beginTransaction();

			$buscar = $this->_db->prepare("SELECT m_id, m_estado FROM tbl_mensaje WHERE m_codigo = :codigo ORDER BY m_id ASC LIMIT 1 FOR UPDATE");
			$buscar->execute(array(':codigo' => $ao));
			$existente = $buscar->fetch();

			if ($existente) {
				if (intval($existente['m_estado']) === 3) {
					$this->_db->commit();
					return true;
				}

				$update = $this->_db->prepare("UPDATE tbl_mensaje SET
					m_nombre = :nombre,
					m_mensaje = :mensaje,
					m_monto = :monto,
					m_ip = :ip,
					m_empresa = :empresa,
					m_hora = :hora,
					m_fecreg = :fecreg,
					m_estado = 2
					WHERE m_codigo = :codigo
					AND m_estado <> 3");

				$rptaSql = $update->execute(array(
					':nombre' => $nombre,
					':mensaje' => $mensaje,
					':monto' => $monto,
					':ip' => $ip,
					':empresa' => $empresa,
					':hora' => $horreg,
					':fecreg' => $fecreg,
					':codigo' => $ao
				));
			} else {
				$insert = $this->_db->prepare("INSERT INTO tbl_mensaje(
					m_estado,
					m_codigo,
					m_fecreg,
					m_nombre,
					m_mensaje,
					m_monto,
					m_ip,
					m_empresa,
					m_hora
				) VALUES (
					:estado,
					:codigo,
					:fecreg,
					:nombre,
					:mensaje,
					:monto,
					:ip,
					:empresa,
					:hora
				)");

				$rptaSql = $insert->execute(array(
					':estado' => 2,
					':codigo' => $ao,
					':fecreg' => $fecreg,
					':nombre' => $nombre,
					':mensaje' => $mensaje,
					':monto' => $monto,
					':ip' => $ip,
					':empresa' => $empresa,
					':hora' => $horreg
				));
			}

			$this->_db->commit();
			return $rptaSql;
		} catch (Exception $e) {
			if ($this->_db->inTransaction()) {
				$this->_db->rollBack();
			}
			return false;
		}

	}


	public function buscarMensaje($codigo)
	{

		$sql = "SELECT
		m_id AS id,
		m_codigo AS codigo,
		m_fecreg AS fecreg,
		m_nombre AS nombre,
		m_mensaje AS mensaje,
		m_firma AS firma,
		m_monto AS monto
		FROM tbl_mensaje WHERE m_codigo = $codigo";

		$rptaSql = $this->_db->query($sql);

		return $rptaSql->fetch();

	}
	public function cambiarMensajeEstado($codigo, $uuid, $hash, $state)
	{
		try {
			$rptaSql = "UPDATE tbl_mensaje SET
				m_estado = 3,
				m_uuid = :uuid,
				m_hash = :hash,
				m_state = :state
				WHERE m_codigo = :codigo
				AND m_estado = 2
				ORDER BY m_id ASC
				LIMIT 1";

			$stmt = $this->_db->prepare($rptaSql);
			$stmt->bindParam(':uuid', $uuid);
			$stmt->bindParam(':hash', $hash);
			$stmt->bindParam(':state', $state);
			$stmt->bindParam(':codigo', $codigo);
			$rptaRptaSql = $stmt->execute();

			if ($rptaRptaSql) {
				$this->cambiarEstadoCarrito($codigo);
			}

			return $rptaRptaSql;

		} catch (Exception $e) {
			// Manejar excepción o registrar error
			return false;
		}
	}

	public function cambiarEstadoCarrito($codigo)
	{
		try {
			$rptaSql = "UPDATE tbl_obsequio_enviado SET
				activo = 1
				WHERE mensaje_id = :codigo";

			$stmt = $this->_db->prepare($rptaSql);
			$stmt->bindParam(':codigo', $codigo);
			$rptaRptaSql = $stmt->execute();

			return $rptaRptaSql;

		} catch (Exception $e) {
			// Manejar excepción o registrar error
			return false;
		}
	}
}
?>