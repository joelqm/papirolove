<?php


class indexModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getCodigoComision($codcom){

		$sql = "SELECT
				c.c_codigo AS codigo,
				c.c_nombre AS nombre,
				c.c_estado AS estado,
				c.c_id AS id
				FROM
				tbl_credenciales c
				WHERE c.c_codigo = '$codcom' AND c_estado = 1";

		//var_dump($sql);
		//exit;

		$rptaSql = $this->_db->query($sql);

		return $rptaSql->fetch();

	}

	public function buscar_certificado($dni){	

		$sql = "SELECT
				c_id AS id,
				c_nombre AS nombre,
				c_correo AS correo,
				c_dni AS dni,
				c_c1 AS c1, 
				c_c2 AS c2,
				c_c3 AS c3,
				c_c4 AS c4,
				c_c5 AS c5,
				c_c6 AS c6,
				c_c7 AS c7,
				c_turno AS turno,
				c_estado AS estado
				FROM
				tbl_cer_22
				WHERE c_dni = $dni";

		$rpta = $this->_db->query($sql);

		return $rpta->fetch();

	}


	public function buscar_certificado_conteo_1($dni){	

		$sql = "SELECT c_c1 AS c1 FROM tbl_cer_22 WHERE c_dni = $dni";
		$rpta = $this->_db->query($sql);
		return $rpta->fetch();

	}

	public function buscar_certificado_conteo_2($dni){	

		$sql = "SELECT c_c2 AS c2 FROM tbl_cer_22 WHERE c_dni = $dni";
		$rpta = $this->_db->query($sql);
		return $rpta->fetch();

	}

	public function buscar_certificado_conteo_3($dni){	

		$sql = "SELECT c_c3 AS c3 FROM tbl_cer_22 WHERE c_dni = $dni";
		$rpta = $this->_db->query($sql);
		return $rpta->fetch();

	}

	public function buscar_certificado_conteo_4($dni){	

		$sql = "SELECT c_c4 AS c4 FROM tbl_cer_22 WHERE c_dni = $dni";
		$rpta = $this->_db->query($sql);
		return $rpta->fetch();

	}

	public function buscar_certificado_conteo_5($dni){	

		$sql = "SELECT c_c5 AS c5 FROM tbl_cer_22 WHERE c_dni = $dni";
		$rpta = $this->_db->query($sql);
		return $rpta->fetch();

	}

	public function buscar_certificado_conteo_6($dni){	

		$sql = "SELECT c_c6 AS c6 FROM tbl_cer_22 WHERE c_dni = $dni";
		$rpta = $this->_db->query($sql);
		return $rpta->fetch();

	}


	public function keysEmp($idSed){
		
		$sql = "SELECT
					e.emp_username AS username,
					e.emp_defpas AS defpas,
					e.emp_defpk AS defpk,
					e.emp_defsha AS defsha
				FROM
					tbl_empresa e
				INNER JOIN tbl_sede s ON s.sede_emp_id = e.emp_id
				WHERE s.sede_id = $idSed";

		//var_dump($sql);exit;

		$rptaSql = $this->_db->query($sql);

		return $rptaSql->fetch();

	}

	public function buscar_certificado_23($dni){	

		$sql = "SELECT
		c_id AS id,
		c_nombre AS nombre,
		c_dni AS dni,
		c_c1 AS c1, 
		c_c2 AS c2,
		c_c3 AS c3,
		c_c4 AS c4,
		c_c5 AS c5,
		c_c6 AS c6,
		c_c7 AS c7,
		c_estado AS estado
		FROM tbl_cer_23 WHERE c_dni = '$dni'";

		//var_dump($sql);exit;

		$rpta = $this->_db->query($sql);

		return $rpta->fetch();

	}

	public function buscar_certificado_23_verify($dni){	

		$sql = "SELECT
		c_c5 AS c5,
		c_c6 AS c6,
		c_c7 AS c7
		FROM tbl_cer_23 WHERE c_dni = $dni";

		// var_dump($sql);exit;

		$rpta = $this->_db->query($sql);

		return $rpta->fetch();

	}

	public function g_ao($ao){

		// $sql = "SELECT o_id FROM tbl_orden WHERE o_codale = $ao";
		// $sql = "SELECT c_id AS id FROM tbl_cer_23 WHERE c_codigo = $ao";
		$sql = "SELECT vc_codigo AS codigo FROM tbl_vencab WHERE vc_codigo = $ao";

		$rptaSql = $this->_db->query($sql);

		return $rptaSql->fetch();

	}

	public function guardarPreRegistro($nombre,$numero){

		// var_dump($nombre.' - '.$numero);exit;
		$fecreg = date('Y-m-d H:i:s');

		$sql = "INSERT INTO tbl_prereg(
			pr_nombre,
			pr_numero,
			pr_fecha,
			pr_estado
			)
			VALUES
			(
			:nombre,
			:numero,
			:fecha,
			:estado
		)";

		$rpta = $this->_db->prepare($sql)										
		->execute(array(
			':nombre' => $nombre,
			':numero' => $numero,
			':fecha' => $fecreg,
			':estado' => 1
		));

		return $rpta;

	}





	public function buscar_certificado_24($dni){	

		$sql = "SELECT
		c_id AS id,
		c_nombre AS nombre,
		c_dni AS dni,
		c_c1 AS c1, 
		c_c2 AS c2,
		c_c3 AS c3,
		c_c4 AS c4,
		c_c5 AS c5,
		c_c6 AS c6,
		c_estado AS estado
		FROM tbl_cer_24 WHERE c_dni = '$dni'";

		//var_dump($sql);exit;

		$rpta = $this->_db->query($sql);

		return $rpta->fetch();

	}





























































































































































































	public function b_k($idSed){

		$sql = "SELECT
				s.sede_pk AS pk,
				s.sede_sk AS sk
				FROM
				tbl_sede s
				WHERE s.sede_id = $idSed";

		$rptaSql = $this->_db->query($sql);

		return $rptaSql->fetch();

	}



	public function guardarCliente($nombre,$apellido,$correo,$celular,$dni){	

		$fecreg = date('Y-m-d H:i:s');
		//$horreg = date('H:i:s');

		//BUSCAR CLIENTE SI YA EXISTE
		$buscarCliente = "SELECT
					cli_id AS id
				FROM
					tbl_cliente
				WHERE cli_numdoc = $dni";

		$rptaBuscarCliente = $this->_db->query($buscarCliente);

		$idCLiente = $rptaBuscarCliente->fetch();

		if ($idCLiente[0] != "") {

			$rptaSqlRegSto = $this->_db->prepare("UPDATE tbl_cliente
				SET
				cli_nombres = :nombres,
				cli_apellidos = :apellidos,
				cli_numcel = :numcel,
				cli_email = :email
				WHERE cli_id = ".$idCLiente[0])
			->execute(
				array(
					':nombres' => strtoupper($nombre),
					':apellidos' => strtoupper($apellido),
					':numcel' => $celular,
					':email' => $correo
			));

			$ultimoID = $idCLiente[0];

		}else{

			$sql = "INSERT INTO tbl_cliente(
				cli_fecreg,
				cli_docide_id,
				cli_numdoc,
				cli_nombres,
				cli_apellidos,
				cli_numcel,
				cli_sede_id,
				cli_estado,
				cli_email,
				cli_usu_id
				)
				VALUES
				(
				:fecreg,
				:docide_id,
				:numdoc,
				:nombres,
				:apellidos,
				:numcel,
				:sede_id,
				:estado,
				:email,
				:usu_id
			)";

			$rpta = $this->_db->prepare($sql)										
			->execute(array(
				':fecreg' => $fecreg,
				':docide_id' => 1,
				':numdoc' => $dni,
				':nombres' => strtoupper($nombre),
				':apellidos' => strtoupper($apellido),
				':numcel' => $celular,
				':sede_id' => 1,
				':estado' => 1,
				':email' => $correo,
				':usu_id' => 99

			));

			$ultimoID = $this->_db->lastInsertId();

		}

		return $ultimoID;

	}



	public function guardarOrden($idCliente,$totfin_mon,$orden,$origen,$totfin_eta,$codigo,$ao,$canent){	

		$fecreg = date('Y-m-d H:i:s');
		//$horreg = date('H:i:s');

		//BUSCAR ID CODIGO COMISION
		$buscarComision = "SELECT
					c_id AS id
				FROM
					tbl_comision
				WHERE c_codigo = '$codigo'";

		$rptaBuscarComision = $this->_db->query($buscarComision);

		$idComision = $rptaBuscarComision->fetch();

		//SEGUN EL ORIGN SE AGREGA CANTIDA DE ENTRADAS
		if ($origen == 1 || $origen == '1') {
			$canentFinal = 1;
		}else{
			$canentFinal = $canent;
		}

		$sql = "INSERT INTO tbl_orden(
		  	o_cli_id,
		  	o_monto,
		  	o_orden_id,
		  	o_origen,
		  	o_etapa,
		  	o_fecreg,
		  	o_usu_id,
		  	o_codale,
		  	o_codcom,
		  	o_canent
			)
			VALUES
			(
			:cli_id,
			:monto,
			:orden_id,
			:origen,
			:etapa,
			:fecreg,
			:usu_id,
			:codale,
			:codcom,
			:canent
		)";

		$rpta = $this->_db->prepare($sql)										
		->execute(array(
			':cli_id' => $idCliente,
			':monto' => $totfin_mon,
			':orden_id' => $orden,
			':origen' => $origen,
			':etapa' => $totfin_eta,
			':fecreg' => $fecreg,
			':usu_id' => '99',
			':codale' => $ao,
			':codcom' => $idComision[0],
			':canent' => $canentFinal
		));

		return $rpta;

	}


	public function cambOrd($order,$est,$ao,$origen,$correo,$nombre){

		//var_dump($order."-".$est."-".$ao);
		// ESTADO PENDIENTE DE PAGO
		// 1 created - 2 pending - 3 pagado/paid - 4 expired - 5 canceled
		if ($est == 2 || $est == '2') {

			$rptaSqlRegSto = $this->_db->prepare("UPDATE tbl_orden
				SET
				o_estado = :estado
				WHERE o_codale = '".$ao."'")
			->execute(
				array(
					':estado' => 2
			));

		}else if($est == 3 || $est == '3'){

			//SI EL CLIENT PAGO CON TARJETA EN EL MISMO INSTANTE SE COMVIERTE ORDEN EN -> VENTA

			$this->convertirOrdenRecibo($ao);

			// COMO EL USUARIO PAGO SE ENVIA CORREO
			// SEGUN EL ORIGEN SE ENVIA CORREO - 1 INDIVIDUAL - 2 COMISION CON ENLACE DE REGISTRO
			if ($origen == 1) {

				$this->envCorIndividual($correo,$nombre,$ao);

			}else{

				$this->envCorComision($correo,$nombre,$ao);

			}

		}

		return $rptaSqlRegSto;

	}


	public function convertirOrdenRecibo($ao){

		//BUSCA EL CORRELATIVO CORRESPONDIENTE POR EMPRESA 
		$correlativo =  $this->buscarCorDoc();
		$correlativo = intval($correlativo["correlativo"]);
		$correlativo = $correlativo + 1;

		switch (strlen($correlativo)) {
			case 1:
			$correlativo = "0000" . $correlativo;
			break;
			case 2:
			$correlativo = "000" . $correlativo;
			break;
			case 3:
			$correlativo = "00" . $correlativo;
			break;
			case 4:
			$correlativo = "0" . $correlativo;
			break;
			case 5:
			$correlativo = $correlativo;
			break;
		}

		$sqlOrden = $this->_db->query("SELECT
			o_cli_id,
			o_monto,
			o_orden_id,
			o_origen,
			o_etapa,
			o_fecreg,
			o_usu_id,
			o_estado,
			o_fecpag,
			o_codcom,
			o_canent
			FROM tbl_orden
			WHERE o_codale = ".$ao);

		$rptaSqlOrden = $sqlOrden->fetchall();

		//ESTADO DE VENTA 1 - PAGADO/RECIBIDO - 2 - CANCELADO
		foreach($rptaSqlOrden as $data) {

			$sqlInsertar = "INSERT INTO tbl_vencab(
				vc_codigo,
				vc_tipdoc_cod,
				vc_fecreg,
				vc_cordoc,
				vc_cli_id,
				vc_usu_id,
				vc_estado,
				vc_tipven_id,
				vc_tippag_id,
				vc_sed_id,
				vc_total,
				vc_ordenId,
				vc_origen,
				vc_etapa,
				vc_codcom,
				vc_canent
				)
				VALUES(
				'".$ao."',
				'99',
				'".$data[5]."',
				'".$correlativo."',
				'".$data[0]."',
				'99',
				'1',
				'2',
				'5',
				'1',
				'".$data[1]."',
				'".$data[2]."',
				'".$data[3]."',
				'".$data[4]."',
				'".$data[9]."',
				'".$data[10]."'
			)";

			$rptaSqlInsertar = $this->_db->exec($sqlInsertar);

		}

		$eliminarOrden = "DELETE FROM tbl_orden WHERE o_codale = ".$ao;
			
		$rptaEliminarOrden = $this->_db->query($eliminarOrden);

		return $rptaEliminarOrden;


	}

	public function buscarCorDoc(){

		$sql = "SELECT MAX(vc_cordoc) AS correlativo FROM tbl_vencab WHERE vc_tipdoc_cod = '99'";
		$inventario = $this->_db->query($sql);
		return $inventario->fetch();

	}

	public function envCorIndividual($correo,$nombre,$ao){

		$mail = new PHPMailer(true);

		try{
		    
		    $mail->isSMTP();
		    $mail->Host       = 'mail.coedem.org';
		    $mail->SMTPAuth   = true;
		    //$mail->Username   = 'contacto@coedem.org';
		    //$mail->Password   = 'Contacto19$';
			$mail->Username   = 'organizacion@coedem.org';
			$mail->Password   = 'Coedem2022';
		    $mail->SMTPSecure = 'ssl';
		    $mail->Port       = 465;

		    //$mail->setFrom('contacto@coedem.org', 'Coedem');
			$mail->setFrom('organizacion@coedem.org', 'Coedem');
		    $mail->addAddress($correo,$nombre);

		    $mail->CharSet = 'UTF-8';
		    $mail->isHTML(true);

			$mail->AddEmbeddedImage('./public/img/logo.png', 'logo');
			$mail->AddEmbeddedImage('./public/img/ico_facebook.jpg', 'logo-facebook');

		    $mail->Subject = 'REGISTRO EXITOSO – YA ERES PARTE DE COEDEM 2022 🥳 ';
		    $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"> <head> <meta http-equiv="Content-type" content="text/html; charset=utf-8"/> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/> <meta http-equiv="X-UA-Compatible" content="IE=edge"/> <meta name="format-detection" content="date=no"/> <meta name="format-detection" content="address=no"/> <meta name="format-detection" content="telephone=no"/> <meta name="x-apple-disable-message-reformatting"/> <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i" rel="stylesheet"/> <title>.:: COEDEM ::.</title> <style type="text/css" media="screen"> /* Linked Styles */ body{padding: 0 !important; margin: 0 !important; display: block !important; min-width: 100% !important; width: 100% !important; background: #0f1726; -webkit-text-size-adjust: none;}a{color: #66c7ff; text-decoration: none;}p{padding: 0 !important; margin: 0 !important;}img{-ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */}.mcnPreviewText{display: none !important;}/* Mobile styles */ @media only screen and (max-device-width: 480px), only screen and (max-width: 480px){.mobile-shell{width: 100% !important; min-width: 100% !important;}.bg{background-size: 100% auto !important; -webkit-background-size: 100% auto !important;}.text-header, .m-center{text-align: center !important;}.center{margin: 0 auto !important;}.container{padding: 20px 10px !important;}.td{width: 100% !important; min-width: 100% !important;}.m-br-15{height: 15px !important;}.p30-15{padding: 30px 15px !important;}.m-td, .m-hide{display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important;}.m-block{display: block !important;}.fluid-img img{width: 100% !important; max-width: 100% !important; height: auto !important;}.column, .column-top, .column-empty, .column-empty2, .column-dir-top{float: left !important; width: 100% !important; display: block !important;}.column-empty{padding-bottom: 10px !important;}.column-empty2{padding-bottom: 30px !important;}.content-spacing{width: 15px !important;}}</style> </head> <body class="body" style="padding: 0 !important; margin: 0 !important; display: block !important; min-width: 100% !important; width: 100% !important; background: #0f1726; -webkit-text-size-adjust: none;"> <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#0f1726"> <tr> <td align="center" valign="top"> <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell"> <tr> <td class="td container" style="width: 650px; min-width: 650px; font-size: 0pt; line-height: 0pt; margin: 0; font-weight: normal; padding: 55px 0px;"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="p30-15" style="padding: 0px 30px 30px 30px;"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <th class="column-top" width="145" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="img m-center" style="font-size: 0pt; line-height: 0pt; text-align: left;"><img src="cid:logo" width="131" height="38" border="0" alt=""/></td></tr></table> </th> <th class="column-empty" width="1" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;"></th> <th class="column" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;"></th> </tr></table> </td></tr></table> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td style="padding-bottom: 10px;"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="tbrr p30-15" style="padding: 38px 30px; border-radius: 26px 26px 0px 0px;" bgcolor="#212739"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="h1 pb25" style="color: #ffffff; font-family: Muli, Arial, sans-serif; font-size: 40px; line-height: 46px; text-align: center; padding-bottom: 25px;"> ¡BIENVENIDO! </td></tr><tr> <td class="text-center pb25" style="color: #c1cddc; font-family: Muli, Arial, sans-serif; font-size: 16px; line-height: 30px; text-align: justify; padding-bottom: 25px;"> Hoy has tomado la <strong style="color:#f73c76;">decisión</strong> de ser parte del <strong style="color:#f73c76;">cambio</strong>, de ser parte de la nueva generación a la que le toca cambiar al país y que necesita estar preparada para enfrentar el duro camino que viene por delante. <br/> Sea que tu sueño es ser empresario o que anhelas llegar alto en una corporación, necesitarás aprender <strong style="color:#f73c76;">lecciones de vida</strong> y tener las <strong style="color:#f73c76;">herramientas técnicas</strong> para lograrlo. <br/> En <strong style="color:#1bce7c;">COEDEM 2022</strong> vivirás la experiencia de conocer de cerca a personas <strong style="color:#f73c76;">como tú</strong>, con sueños, que todos los días avanzan un paso más para estar más cerca de donde quieren estar; personas de las que puedes <strong style="color:#f73c76;">aprender</strong> mucho y que seguro <strong style="color:#f73c76;">recordarás siempre</strong>. <br/> Algunos días antes del evento recibirás una notificación al celular y al correo con las credenciales de acceso a la edición <strong style="color:#f73c76;">2022 COEDEM</strong> <strong style="color:#1bce7c;">VIRTUAL</strong>, el material que necesitarás para el evento y las indicaciones correspondientes. </td></tr></table> </td></tr></table> </td></tr></table> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="p30-15" bgcolor="#f73c76"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="h4 pb20" style="color: #ffffff; font-family: Muli, Arial, sans-serif; font-size: 24px; line-height: 28px; text-align: center; padding: 30px;font-weight: bold;">¡Nos vemos en COEDEM!</td></tr></table> </td></tr><tr> <td class="img pb10" style="font-size: 0pt; line-height: 0pt; text-align: left; padding-bottom: 10px;"></td></tr></table> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="p30-15 bbrr" style="padding: 50px 30px; border-radius: 0px 0px 26px 26px;" bgcolor="#212739"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td align="center" style="padding-bottom: 30px;"> <table border="0" cellspacing="0" cellpadding="0"> <tr> <td class="img" width="55" style="font-size: 0pt; line-height: 0pt; text-align: left;"> <a href="https://www.facebook.com/Congreso-de-Emprendimiento-Direcci%C3%B3n-Estrat%C3%A9gica-y-Marketing-Digital-114385189945019" target="_blank"> <img src="cid:logo-facebook" width="38" height="38" border="0" alt=""/> </a> </td></tr></table> </td></tr><tr> <td class="text-footer1 pb10" style="color: #c1cddc; font-family: Muli, Arial, sans-serif; font-size: 16px; line-height: 20px; text-align: center; padding-bottom: 10px;"> .:: COEDEM ::. </td></tr></table> </td></tr></table> </td></tr></table></td></tr></table> </body></html>';

		    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		    //echo($mail->send());

		    if($mail->send()){

				return true;

			}else{

				return false;

			}

		}catch (Exception $e) {

		    return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

		}

	}

	public function envCorComision($correo,$nombre,$ao){

		$mail = new PHPMailer(true);

		try{

		    $mail->isSMTP();
		    $mail->Host       = 'mail.coedem.org';
		    $mail->SMTPAuth   = true;
		    //$mail->Username   = 'contacto@coedem.org';
		    //$mail->Password   = 'Contacto19$';
			$mail->Username   = 'organizacion@coedem.org';
			$mail->Password   = 'Coedem2022';
		    $mail->SMTPSecure = 'ssl';
		    $mail->Port       = 465;

		    //$mail->setFrom('contacto@coedem.org', 'Coedem');
			$mail->setFrom('organizacion@coedem.org', 'Coedem');
		    $mail->addAddress($correo,$nombre);

		    $mail->CharSet = 'UTF-8';
		    $mail->isHTML(true);

			$mail->AddEmbeddedImage('./public/img/logo.png', 'logo');
			$mail->AddEmbeddedImage('./public/img/ico_facebook.jpg', 'logo-facebook');

		    $mail->Subject = 'REGISTRO EXITOSO – YA ERES PARTE DE COEDEM 2022 🥳';
		    $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"> <head> <meta http-equiv="Content-type" content="text/html; charset=utf-8"/> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/> <meta http-equiv="X-UA-Compatible" content="IE=edge"/> <meta name="format-detection" content="date=no"/> <meta name="format-detection" content="address=no"/> <meta name="format-detection" content="telephone=no"/> <meta name="x-apple-disable-message-reformatting"/> <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i" rel="stylesheet"/> <title>.:: COEDEM ::.</title> <style type="text/css" media="screen"> /* Linked Styles */ body{padding: 0 !important; margin: 0 !important; display: block !important; min-width: 100% !important; width: 100% !important; background: #0f1726; -webkit-text-size-adjust: none;}a{color: #66c7ff; text-decoration: none;}p{padding: 0 !important; margin: 0 !important;}img{-ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */}.mcnPreviewText{display: none !important;}/* Mobile styles */ @media only screen and (max-device-width: 480px), only screen and (max-width: 480px){.mobile-shell{width: 100% !important; min-width: 100% !important;}.bg{background-size: 100% auto !important; -webkit-background-size: 100% auto !important;}.text-header, .m-center{text-align: center !important;}.center{margin: 0 auto !important;}.container{padding: 20px 10px !important;}.td{width: 100% !important; min-width: 100% !important;}.m-br-15{height: 15px !important;}.p30-15{padding: 30px 15px !important;}.m-td, .m-hide{display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important;}.m-block{display: block !important;}.fluid-img img{width: 100% !important; max-width: 100% !important; height: auto !important;}.column, .column-top, .column-empty, .column-empty2, .column-dir-top{float: left !important; width: 100% !important; display: block !important;}.column-empty{padding-bottom: 10px !important;}.column-empty2{padding-bottom: 30px !important;}.content-spacing{width: 15px !important;}}</style> </head> <body class="body" style="padding: 0 !important; margin: 0 !important; display: block !important; min-width: 100% !important; width: 100% !important; background: #0f1726; -webkit-text-size-adjust: none;"> <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#0f1726"> <tr> <td align="center" valign="top"> <table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell"> <tr> <td class="td container" style="width: 650px; min-width: 650px; font-size: 0pt; line-height: 0pt; margin: 0; font-weight: normal; padding: 55px 0px;"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="p30-15" style="padding: 0px 30px 30px 30px;"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <th class="column-top" width="145" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="img m-center" style="font-size: 0pt; line-height: 0pt; text-align: left;"><img src="cid:logo" width="131" height="38" border="0" alt=""/></td></tr></table> </th> <th class="column-empty" width="1" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal; vertical-align: top;"></th> <th class="column" style="font-size: 0pt; line-height: 0pt; padding: 0; margin: 0; font-weight: normal;"></th> </tr></table> </td></tr></table> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td style="padding-bottom: 10px;"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="tbrr p30-15" style="padding: 38px 30px; border-radius: 26px 26px 0px 0px;" bgcolor="#212739"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="h1 pb25" style="color: #ffffff; font-family: Muli, Arial, sans-serif; font-size: 40px; line-height: 46px; text-align: center; padding-bottom: 25px;"> ¡LE DAMOS LA BIENVENIDA A TU DELEGACIÓN! </td></tr><tr> <td class="text-center pb25" style="color: #c1cddc; font-family: Muli, Arial, sans-serif; font-size: 16px; line-height: 30px; text-align: justify; padding-bottom: 25px;"> <strong style="color: #f73c76;"></strong> <strong style="color: #1bce7c;">COEDEM 2022</strong> Hoy han tomado la <strong style="color: #f73c76;">decisión</strong> de ser parte del <strong style="color: #f73c76;">cambio</strong>, de ser parte de la nueva generación a la que le toca cambiar al país y que necesita estar preparada para enfrentar el duro camino que viene por delante. Sea que su sueño es ser empresario o que anhelan llegar alto en una corporación, necesitarán aprender <strong style="color: #f73c76;">lecciones de vida</strong> y tener las <strong style="color: #f73c76;">herramientas técnicas</strong> para lograrlo. <br/> En <strong style="color: #1bce7c;">COEDEM 2022</strong> vivirán la experiencia de conocer de cerca a personas <strong style="color: #f73c76;">como ustedes</strong>, con sueños, que todos los días avanzan un paso más para estar más cerca de donde quieren estar; personas de las que pueden <strong style="color: #f73c76;">aprender</strong> mucho y que seguro <strong style="color: #f73c76;">recordarán siempre</strong>.<br/> Por favor, como representante de tu delegación te invitamos a completar su registro; asegúrate de completar los datos de cada uno de los miembros de tu comisión en el siguiente link: <br/> <br/> <a href="https://www.coedem.org/completar/registro/'.$ao.'">https://www.coedem.org/completar/registro/'.$ao.'</a> <br/> <br/> Algunos días antes del evento recibirán una notificación al celular y al correo con las credenciales de acceso a la edición <strong style="color: #f73c76;">2022 COEDEM</strong> <strong style="color: #1bce7c;">VIRTUAL</strong>, el material que necesitarán para el evento y las indicaciones correspondientes. </td></tr></table> </td></tr></table> </td></tr></table> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="p30-15" bgcolor="#f73c76"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="h4 pb20" style="color: #ffffff; font-family: Muli, Arial, sans-serif; font-size: 24px; line-height: 28px; text-align: center; padding: 30px; font-weight: bold;"> ¡Nos vemos en COEDEM! </td></tr></table> </td></tr><tr> <td class="img pb10" style="font-size: 0pt; line-height: 0pt; text-align: left; padding-bottom: 10px;"></td></tr></table> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="p30-15 bbrr" style="padding: 50px 30px; border-radius: 0px 0px 26px 26px;" bgcolor="#212739"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td align="center" style="padding-bottom: 30px;"> <table border="0" cellspacing="0" cellpadding="0"> <tr> <td class="img" width="55" style="font-size: 0pt; line-height: 0pt; text-align: left;"> <a href="https://www.facebook.com/Congreso-de-Emprendimiento-Direcci%C3%B3n-Estrat%C3%A9gica-y-Marketing-Digital-114385189945019" target="_blank"> <img src="cid:logo-facebook" width="38" height="38" border="0" alt=""/> </a> </td></tr></table> </td></tr><tr> <td class="text-footer1 pb10" style="color: #c1cddc; font-family: Muli, Arial, sans-serif; font-size: 16px; line-height: 20px; text-align: center; padding-bottom: 10px;"> .:: COEDEM ::. </td></tr></table> </td></tr></table> </td></tr></table> </td></tr></table> </body></html>';

		    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		    //echo($mail->send());

		    if($mail->send()){

				return true;

			}else{

				return false;

			}

		}catch(Exception $e) {

		    return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

		}

	}

	public function envfor($nombre,$celular){	

		$fecreg = date('Y-m-d H:i:s');

		$buscarCorreo = "SELECT
						c_id AS id
						FROM
						tbl_contacto
						WHERE c_celular = '$celular'";

		$rptaBuscarCorreo = $this->_db->query($buscarCorreo);

		$idContacto = $rptaBuscarCorreo->fetch();

		if ($idContacto[0] == "" || is_null($idContacto[0])) {

			// $this->envCorContacto($correo,$nombre);
			$sql = "INSERT INTO tbl_contacto(
			  	c_nombre,
			  	c_celular,
			  	c_estado,
			  	c_fecreg
				)
				VALUES
				(
				:nombre,
				:celular,
				:estado,
				:fecreg
			)";

			$rpta = $this->_db->prepare($sql)										
			->execute(array(
				':nombre' => $nombre,
				':celular' => $celular,
				':estado' => 1,
				':fecreg' => $fecreg
			));

			return $rpta;

		}else{

			return "existe";
			
		}

	}

	public function envCorContacto($correo,$nombre){

		$mail = new PHPMailer(true);

		try{
		    
		    $mail->isSMTP();
		    $mail->Host       = 'mail.coedem.org';
		    $mail->SMTPAuth   = true;
		    $mail->Username   = 'contacto@coedem.org';
		    $mail->Password   = 'Contacto19$';
		    $mail->SMTPSecure = 'ssl';
		    $mail->Port       = 465;

		    $mail->setFrom('contacto@coedem.org', 'Coedem');
		    $mail->addAddress($correo,$nombre);

		    $mail->CharSet = 'UTF-8';
		    $mail->isHTML(true);

			$mail->AddEmbeddedImage('./public/img/logo.png', 'logo');
			$mail->AddEmbeddedImage('./public/img/mail-img-1.jpg', 'mail-img-1');
			$mail->AddEmbeddedImage('./public/img/ico_facebook.jpg', 'logo-facebook');


		    $mail->Subject = 'COEDEM - BIENVENIDO 🥳 ';
		    $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta http-equiv="Content-type" content="text/html; charset=utf-8"/><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="format-detection" content="date=no"/><meta name="format-detection" content="address=no"/><meta name="format-detection" content="telephone=no"/><meta name="x-apple-disable-message-reformatting"/><link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i" rel="stylesheet"/><title>.:: COEDEM ::.</title><style type="text/css" media="screen">/* Linked Styles */body{padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#0f1726; -webkit-text-size-adjust:none}a{color:#66c7ff; text-decoration:none}p{padding:0 !important; margin:0 !important}img{-ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */}.mcnPreviewText{display: none !important;}/* Mobile styles */@media only screen and (max-device-width: 480px), only screen and (max-width: 480px){.mobile-shell{width: 100% !important; min-width: 100% !important;}.bg{background-size: 100% auto !important; -webkit-background-size: 100% auto !important;}.text-header,.m-center{text-align: center !important;}.center{margin: 0 auto !important;}.container{padding: 20px 10px !important}.td{width: 100% !important; min-width: 100% !important;}.m-br-15{height: 15px !important;}.p30-15{padding: 30px 15px !important;}.m-td,.m-hide{display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important;}.m-block{display: block !important;}.fluid-img img{width: 100% !important; max-width: 100% !important; height: auto !important;}.column,.column-top,.column-empty,.column-empty2,.column-dir-top{float: left !important; width: 100% !important; display: block !important;}.column-empty{padding-bottom: 10px !important;}.column-empty2{padding-bottom: 30px !important;}.content-spacing{width: 15px !important;}}</style></head><body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#0f1726; -webkit-text-size-adjust:none;"><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#0f1726"><tr><td align="center" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell"><tr><td class="td container" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:55px 0px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="p30-15" style="padding: 0px 30px 30px 30px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><th class="column-top" width="145" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="cid:logo" width="131" height="38" border="0" alt=""/></td></tr></table></th><th class="column-empty" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th><th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"></th></tr></table></td></tr></table><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td style="padding-bottom: 10px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="tbrr p30-15" style="padding: 38px 30px; border-radius:26px 26px 0px 0px;" bgcolor="#212739"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="h1 pb25" style="color:#ffffff; font-family:Muli, Arial,sans-serif; font-size:40px; line-height:46px; text-align:center; padding-bottom:25px;">¡Gracias por escribirnos!</td></tr><tr><td class="text-center pb25" style="color:#c1cddc; font-family:Muli, Arial,sans-serif; font-size:16px; line-height:30px; text-align:center; padding-bottom:25px;">Enseguida estaremos comunicándonos con usted.</td></tr></table></td></tr></table></td></tr></table><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="p30-15" bgcolor="#f73c76"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><th class="column-top" width="325" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="cid:mail-img-1" width="325" height="362" border="0" alt=""/></td></tr></table></th><th class="column-empty2" width="30" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th><th class="column" width="280" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="h4 pb20" style="color:#ffffff; font-family:Muli, Arial,sans-serif; font-size:20px; line-height:28px; text-align:left; padding-bottom:20px;">COEDEM 2022</td></tr><tr><td class="text pb20" style="color:#ffffff; font-family:Arial,sans-serif; font-size:14px; line-height:26px; text-align:left; padding-bottom:20px;">El primer congreso 100% VIRTUAL del país tanto para estudiantes que ven su futuro en el EMPRENDIMIENTO, como para los que desean realizar una espléndida carrera dentro de una empresa. Además, ahondaremos en el MARKETING DIGITAL, una tendencia que actualmente dejó de ser una opción, para convertirse en una obligación.</td></tr></table></th><th class="m-td" width="30" style="font-size:0pt; line-height:0pt; text-align:left;"></th></tr></table></td></tr><tr><td class="img pb10" style="font-size:0pt; line-height:0pt; text-align:left; padding-bottom:10px;"></td></tr></table><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="p30-15 bbrr" style="padding: 50px 30px; border-radius:0px 0px 26px 26px;" bgcolor="#212739"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="center" style="padding-bottom: 30px;"><table border="0" cellspacing="0" cellpadding="0"><tr><td class="img" width="55" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="https://www.facebook.com/Congreso-de-Emprendimiento-Direcci%C3%B3n-Estrat%C3%A9gica-y-Marketing-Digital-114385189945019" target="_blank"><img src="cid:logo-facebook" width="38" height="38" border="0" alt=""/></a></td></tr></table></td></tr><tr><td class="text-footer1 pb10" style="color:#c1cddc; font-family:Muli, Arial,sans-serif; font-size:16px; line-height:20px; text-align:center; padding-bottom:10px;">.:: COEDEM ::. </td></tr><tr><td class="text-footer2" style="color:#8297b3; font-family:Muli, Arial,sans-serif; font-size:12px; line-height:26px; text-align:center;">2DO CONGRESO DE EMPRENDIMIENTO DIRECCIÓN ESTRATÉGICA Y MARKETING DIGITAL EDICIÓN 100% VIRTUAL</td></tr></table></td></tr></table></td></tr></table></td></tr></table></body></html>';

		    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		    //echo($mail->send());

		    if($mail->send())
			{

				return true;

			}else{

				return false;

			}
			

		} catch (Exception $e) {

		    return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

		}

	}






































	public function buscarPreRegistrados($dni){

		$sql = "SELECT id,dni,estado FROM `tbl_preregistro` WHERE dni = $dni";

		$rptaSql = $this->_db->query($sql);

		return $rptaSql->fetch();

	}

	public function buscarCodigoComision($codigo){

		$sql = "SELECT
				c_id AS id,
				c_nombre AS nombre,
				c_nomcor AS nomcor,
				c_codigo AS codigo
				FROM tbl_comision WHERE c_estado = 1 AND c_codigo = '$codigo'";

		$rptaSql = $this->_db->query($sql);

		return $rptaSql->fetch();

	}

	public function generarAleatorioOrden(){

		$codigo = rand(11111111,99999999);

		//comprueba si existe el codigo aletorio, cuenta
		if (count($this->generarAleatorio($codigo)) <= 0 ) {

			return $codigo;

		}else{
			
			$this->generarAleatorioOrden();

		}

	}

	public function generarAleatorio($rptaAleatorio){

		$sql = "SELECT o_id FROM tbl_orden WHERE o_codale = $rptaAleatorio";

		$rptaSql = $this->_db->query($sql);

		return $rptaSql->fetchAll();

	}

	

	public function guardarOrdenIndividual($nombre,$apepat,$apemat,$celular,$corele,$dni,$codigoAletorio,$tipoentrada,$listapreregistro,$id_comision,$total){

		// GUARDAR CLIENTE Y OBTENER ULTIMO ID REGISTRADO
		
		$fecreg = date('Y-m-d H:i:s');

		$sql = "SELECT cli_id AS id FROM tbl_cliente WHERE cli_numdoc = '$dni'";

		$querySql = $this->_db->query($sql);

		$rptaSql = $querySql->fetch();

		if ($rptaSql['id'] == null || $rptaSql['id'] == 'null' || is_null($rptaSql['id'])) {
			
			$sqlCliente = "INSERT INTO tbl_cliente(
					cli_docide_id,
					cli_numdoc,
					cli_nombres,
					cli_apellidos,
					cli_numcel,
					cli_email,
					cli_estado,
					cli_sede_id,
					cli_usu_id,
					cli_fecreg
					) VALUES (
					:docide_id,
					:numdoc,
					:nombres,
					:apellidos,
					:numcel,
					:email,
					:estado,
					:sede_id,
					:usu_id,
					:fecreg)";

			$rptaCliente = $this->_db->prepare($sqlCliente)										
			->execute(array(
				':docide_id' => 1,
				':numdoc' => $dni,
				':nombres' => $nombre,
				':apellidos' => $apepat.' '.$apemat,
				':numcel' => $celular,
				':email' => $corele,
				':estado' => 1,
				':sede_id' => 1,
				':usu_id' => 1,
				':fecreg' => $fecreg
			));

			$ultimoIdCliente = $this->_db->lastInsertId();

		}else{

			$sqlCliente = "UPDATE tbl_cliente SET
					cli_nombres = :nombres,
					cli_apellidos = :apellidos,
					cli_numcel = :numcel,
					cli_email = :email
					WHERE cli_numdoc = '$dni'";

			$rptaCliente = $this->_db->prepare($sqlCliente)										
			->execute(array(
				':nombres' => $nombre,
				':apellidos' => $apepat.' '.$apemat,
				':numcel' => $celular,
				':email' => $corele
			));

			$ultimoIdCliente = $rptaSql['id'];

		}

		if ($id_comision == "") {
			$comision = 0;
		} else {
			$comision = $id_comision;
		}

		$sql = "INSERT INTO tbl_orden(
					o_codale,
					o_cli_id,
					o_monto,
					o_origen,
					o_fecreg,
					o_usu_id,
					o_estado,
					o_codcom,
					o_canent
					)
				VALUES (
					:codale,
					:cli_id,
					:monto,
					:origen,
					:fecreg,
					:usu_id,
					:estado,
					:codcom,
					:canent)";

		$rpta = $this->_db->prepare($sql)										
		->execute(array(
			':codale' => $codigoAletorio,
			':cli_id' => $ultimoIdCliente,
			':monto' => $total,
			':origen' => 1,
			':fecreg' => $fecreg,
			':usu_id' => 1,
			':estado' => 1,
			':codcom' => $comision,
			':canent' => 1
		));

		return $rpta;

	}

	




	public function guardarOrdenGrupal($codigo,$tipoentrada,$id_comision,$total,$cantidad,$dni_lider,$nombre_lider,$apepat_lider,$apemat_lider,$celular_lider,$corele_lider){

		// var_dump($codigo.'-'.$tipoentrada.'-'.$id_comision.'-'.$total.'-'.$cantidad);exit;

		$fecreg = date('Y-m-d H:i:s');

		// GUARDAR CLIENTE Y OBTENER ULTIMO ID REGISTRADO

		$sql = "SELECT cli_id AS id FROM tbl_cliente WHERE cli_numdoc = '$dni_lider'";

		$querySql = $this->_db->query($sql);

		$rptaSql = $querySql->fetch();

		if ($rptaSql['id'] == null || $rptaSql['id'] == 'null' || is_null($rptaSql['id'])) {
			
			$sqlCliente = "INSERT INTO tbl_cliente(
					cli_docide_id,
					cli_numdoc,
					cli_nombres,
					cli_apellidos,
					cli_numcel,
					cli_email,
					cli_estado,
					cli_sede_id,
					cli_usu_id,
					cli_fecreg
					) VALUES (
					:docide_id,
					:numdoc,
					:nombres,
					:apellidos,
					:numcel,
					:email,
					:estado,
					:sede_id,
					:usu_id,
					:fecreg)";

			$rptaCliente = $this->_db->prepare($sqlCliente)										
			->execute(array(
				':docide_id' => 1,
				':numdoc' => $dni_lider,
				':nombres' => $nombre_lider,
				':apellidos' => $apepat_lider.' '.$apemat_lider,
				':numcel' => $celular_lider,
				':email' => $corele_lider,
				':estado' => 1,
				':sede_id' => 1,
				':usu_id' => 1,
				':fecreg' => $fecreg
			));

			$ultimoIdCliente = $this->_db->lastInsertId();
		
		}else{

			$sqlCliente = "UPDATE tbl_cliente SET
					cli_nombres = :nombres,
					cli_apellidos = :apellidos,
					cli_numcel = :numcel,
					cli_email = :email
					WHERE cli_numdoc = '$dni_lider'";

			$rptaCliente = $this->_db->prepare($sqlCliente)										
			->execute(array(
				':nombres' => $nombre_lider,
				':apellidos' => $apepat_lider.' '.$apemat_lider,
				':numcel' => $celular_lider,
				':email' => $corele_lider
			));

			$ultimoIdCliente = $rptaSql['id'];

		}
		
		$fecreg = date('Y-m-d H:i:s');

		if ($id_comision == "") {
			$comision = 0;
		} else {
			$comision = $id_comision;
		}

		$sql = "INSERT INTO tbl_orden(
			o_codale,
			o_monto,
			o_origen,
			o_fecreg,
			o_usu_id,
			o_estado,
			o_codcom,
			o_canent,
			o_cli_id
			)
		VALUES (
			:codale,
			:monto,
			:origen,
			:fecreg,
			:usu_id,
			:estado,
			:codcom,
			:canent,
			:cliid)";

		$rpta = $this->_db->prepare($sql)										
		->execute(array(
			':codale' => $codigo,
			':monto' => $total,
			':origen' => 2,
			':fecreg' => $fecreg,
			':usu_id' => 1,
			':estado' => 1,
			':codcom' => $comision,
			':canent' => intval($cantidad),
			':cliid' => $ultimoIdCliente
		));


		return $rpta;

	}

























	
	
	public function guardarOrdenEntradas($dni,$curso,$pretot,$codigo,$celular,$corele,$sede,$totalPagoTotalCer,$nombre_cp){

		// GUARDAR CLIENTE Y OBTENER ULTIMO ID REGISTRADO
		
		$fecreg = date('Y-m-d H:i:s');

		$sql = "SELECT cli_id AS id FROM tbl_cliente WHERE cli_numdoc = '$dni'";

		$querySql = $this->_db->query($sql);

		$rptaSql = $querySql->fetch();

		//var_dump($rptaSql);exit;

		if ($rptaSql['id'] == null || $rptaSql['id'] == 'null' || is_null($rptaSql['id'])) {
			
			$sqlCliente = "INSERT INTO tbl_cliente(
					cli_docide_id,
					cli_numdoc,
					cli_numcel,
					cli_email,
					cli_estado,
					cli_sede_id,
					cli_usu_id,
					cli_fecreg,
					cli_nombres,
					cli_apellidos
					) VALUES (
					:docide_id,
					:numdoc,
					:numcel,
					:email,
					:estado,
					:sede_id,
					:usu_id,
					:fecreg,
					:nombres,
					:apellidos)";

			$rptaCliente = $this->_db->prepare($sqlCliente)										
			->execute(array(
				':docide_id' => 1,
				':numdoc' => $dni,
				':numcel' => $celular,
				':email' => $corele,
				':estado' => 1,
				':sede_id' => 1,
				':usu_id' => 1,
				':fecreg' => $fecreg,
				':nombres' => $nombre_cp,
				':apellidos' => ''
			));

			$ultimoIdCliente = $this->_db->lastInsertId();

		}else{

			$sqlCliente = "UPDATE tbl_cliente SET
					cli_numcel = :numcel,
					cli_email = :email,
					cli_nombres = :nombres,
					cli_apellidos = :apellidos
					WHERE cli_numdoc = '$dni'";

			$rptaCliente = $this->_db->prepare($sqlCliente)										
			->execute(array(
				':numcel' => $celular,
				':email' => $corele,
				':nombres' => $nombre_cp,
				':apellidos' => ''
			));

			$ultimoIdCliente = $rptaSql['id'];

		}

		$sqlClienteRegistroCertificado2024 = "UPDATE tbl_cer_24 SET
					c_codigo = :codigo,
					c_curso = :curso,
					c_total = :total,
					c_email = :email,
					c_celular = :celular,
					c_compra = :compra,
					c_estado = :estado,
					c_fecreg = :fecreg,
					c_sed_rec = :sed_rec
					WHERE c_dni = '$dni'";

		$rptaSqlRegistroCertificado2024 = $this->_db->prepare($sqlClienteRegistroCertificado2024)										
		->execute(array(
			':codigo' => $codigo,
			':curso' => $curso,
			':total' => $pretot,
			':email' => $corele,
			':celular' => $celular,
			':compra' => 1,
			':estado' => 1,
			':fecreg' => $fecreg,
			':sed_rec' => $sede
		));

		// 1 - Individual'
		// 2 - Grupal'
		// 3 - Certificados'
		// 4 - Certificados + Curso'

		if ($curso == 1) {
			$origen = 3;
		} else if ($curso == 2){
			$origen = 4;
		}

		$sqlRegistrarSolicitud = "INSERT INTO tbl_orden(
					o_codale,
					o_cli_id,
					o_monto,
					o_origen,
					o_fecreg,
					o_usu_id,
					o_estado,
					o_canent,
					o_curso
					)
				VALUES (
					:codale,
					:cli_id,
					:monto,
					:origen,
					:fecreg,
					:usu_id,
					:estado,
					:canent,
					:curso)";

		$rptaSqlRegistrarSolicitud = $this->_db->prepare($sqlRegistrarSolicitud)										
		->execute(array(
			':codale' => $codigo,
			':cli_id' => $ultimoIdCliente,
			':monto' => $totalPagoTotalCer,
			':origen' => $origen,
			':fecreg' => $fecreg,
			':usu_id' => 1,
			':estado' => 1,
			':canent' => 1,
			':curso' => $curso
		));


		return $rptaSqlRegistrarSolicitud;

	}







	
}

?>