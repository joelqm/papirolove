<?php

class ajaxModel extends Model
{
	public function __construct() {
		parent::__construct();
	}


	public function getFechaActual() {
		setlocale(LC_TIME,"es_ES");
		$diaLetras = ucfirst(strftime("%A"));
		$diaNum = strftime("%e");
		$mesLetras = ucfirst(strftime("%B"));
		$anio = strftime("%G");
		return $diaLetras.", ".$diaNum." de ".$mesLetras." del ".$anio;
	}

	public function getSedes() {
		$sedes = $this->_db->query("SELECT 
			sede_id,
			sede_descripcion,
			sede_direccion,
			sede_ubigeo_cod,
			sede_telefono,
			sede_fecreg
			FROM tbl_sede WHERE sede_estado = 1");
		return $sedes->fetchAll();
	}

	public function getUbigeo() {
		$ubigeo = $this->_db->query("
			SELECT
			u.ubi_cod AS codigo,
			CONCAT(u.ubi_nomdep,', ',u.ubi_nompro,', ',u.ubi_nomdis) AS ubigeo
			FROM tbl_ubigeo u
			");
		
		return $ubigeo->fetchAll();
	}


/*
	public function getDepartamento() {
		$sql ="
		SELECT
		`u`.`codpto` AS coddep,
		`u`.`nomdpto` AS `dpto`
		FROM ubigeo u
		GROUP BY u.nomdpto
		ORDER BY `u`.`nomdpto` ASC
		";

		$ubigeo = $this->_db->query($sql);
		return $ubigeo->fetchAll();
	}
*/


	public function getRoles() {
		$roles = $this->_db->query("
			SELECT 
			rol_id,
			rol_descripcion
			FROM tbl_rol where rol_id != 1
			");
		return $roles->fetchAll();
	}



	/* **************************************************************** */










	public function getMedioPago() {
		$mediopago = $this->_db->query("SELECT * FROM tbl_medpag");
		return $mediopago->fetchAll();
	}

	public function limpiarTabla() {
		$truncate = "TRUNCATE table tbl_vendet_tmp";
		return $this->_db->exec($truncate);
	}

	public function getTipoPagos() {
		$tipopago = $this->_db->query("SELECT * FROM tbl_tippago");
		return $tipopago->fetchAll();
	}

	public function getTipoVentas() {
		$tipoventa = $this->_db->query("SELECT * FROM tbl_tipven");
		return $tipoventa->fetchAll();
	}

	public function getTipoCliente() {
		$tipoclientes = $this->_db->query("SELECT * FROM tbl_tipcli");
		return $tipoclientes->fetchAll();
	}

	/**
	 * ELIMINAR PRODUCO DE LA TABLA TEMPORAL
	 */
	public function eliminarProducto($idproducto) {
		$eliminar = "DELETE FROM tbl_vendet_tmp WHERE vendet_id = $idproducto";
		return $this->_db->exec($eliminar);
	}
	/**
	 * OBTENER CLIENTES
	 * 
	 */
	
	public function buscarCliente2($cliente) {
		$sql = "SELECT * FROM cliente WHERE CONCAT(nombres, ' ', apellidos) LIKE '%$cliente%'";
		$res = $this->_db->query($sql);
		$res = $res->fetchAll();
		$data = array();
		$x = 0;
		foreach ($res as $r) {
			$data[$x]["value"] = $r["nombres"] . " " . $r["apellidos"];
			$data[$x]["direccion"] = $r["direccion"];
			$data[$x]["documento"] = $r["documento"];
			$data[$x]["idcliente"] = $r["idcliente"];
			$x++;
		}

		return $data;
	}

	public function buscarProductos($producto) {

		if ($_SESSION["sede_prouni"]=="1") {
			$where = " AND p.producto_unico = 1";
		}else{
			$where = " AND p.producto_unico = 0";			
		}

		$sql = "SELECT
		p.producto_cod AS cod,
		CONCAT(p.producto_descripcion,' - ',p.producto_especificacion) as producto,		
		p.producto_detalle AS productodetalle,
		pp.prepro_precven AS preven,
		pp.prepro_descuento AS descuento,
		pp.prepro_predes AS predes,
		p.producto_id AS id,
		p.sede_id AS sede,
		pp.prepro_sede_id
		from tbl_producto p
		join tbl_prepro pp on p.producto_cod = pp.prepro_producto_cod
		WHERE p.producto_descripcion LIKE '%$producto%'   AND pp.prepro_sede_id = ".$_SESSION["ususede_id"]." $where ";


 		//var_dump($sql);exit();
		


		$res = $this->_db->query($sql);
		$res = $res->fetchAll();
		$data = array();
		$x = 0;
		foreach ($res as $r) {
			$data[$x]["value"] = $r["producto"];
			$data[$x]["preven"] = $r["preven"];
			$data[$x]["idproducto"] = $r["id"];
			$data[$x]["descuento"] = $r["descuento"];
			$data[$x]["predes"] = $r["predes"];
			$data[$x]["cod"] = $r["cod"];

			$x++;
		}
		return $data;
	}



	public function cargarUbigeo($descripcion) {
		$sql = "SELECT
		CONCAT(nomdis,', ', nomprov, ', ', nomdpto)	as value FROM ubigeo
		WHERE 
		CONCAT(nomdis,', ', nomprov, ', ', nomdpto) LIKE '%$descripcion%' 
		limit 0,10";
		$datos = $this->_db->query($sql);
		return $datos->fetchAll();
	}

	public function getTipoPago($where = null) {
		if($where != null) {
			$where = " WHERE idtipopago != 3";
		}
		$tpagos = $this->_db->query("SELECT * from tipopago $where");
		return $tpagos->fetchAll();
	}

	public function getEstados() {
		$estados = $this->_db->query("SELECT * FROM estados");
		return $estados->fetchAll();
	}

	public function getTipoConceptos() {
		$tipoconceptos = $this->_db->query("SELECT * FROM tipoconcepto");
		return $tipoconceptos->fetchAll();
	}

	/*public function getTipoDocumento()
	{
		$tdocumentos = $this->_db->query("SELECT * FROM tipodocumento");
		return $tdocumentos->fetchAll();
	}*/



	/* JOEL */

	public function getTipoDocumento($where = null)	{
		if($where != null) {
			$tipo_documentos = $this->_db->query("SELECT * FROM tbl_tipdoc where tipdoc_modi = 1 AND tipdoc_cod = $where");
			return $tipo_documentos->fetch();
		} else {
			$tipo_documentos = $this->_db->query("SELECT * FROM tbl_tipdoc where tipdoc_modi = 1");
			return $tipo_documentos->fetchAll();
		}
	}

	public function getTipoOperacion() {
		$tipooperacion = $this->_db->query("SELECT * FROM tbl_tipope");
		return $tipooperacion->fetchAll();
	}

	public function getAlmacen($almacen = null) {
		if($almacen != null) {
			$almacen = $this->_db->query("SELECT * FROM tbl_almacen WHERE almacen_id = $almacen");
		} else {
			$almacen = $this->_db->query("SELECT * FROM tbl_almacen");
		}
		return $almacen->fetchAll();
	}

	public function getProveedor() {
		//$proveedor = $this->_db->query("SELECT * FROM tbl_proveedor where proveedor_estado = 1 AND sede_id = ".$_SESSION["ususede_id"]);
		$proveedor = $this->_db->query("
			SELECT 

			proveedor_id  as id,
			CONCAT(proveedor_descripcion,' - ',proveedor_nroide) as proveedor


			FROM tbl_proveedor"
		);


		return $proveedor->fetchAll();
	}

	public function obtenerPrecio($codigo) {
		/*$precio = $this->_db->query("SELECT prepro_precven FROM tbl_prepro WHERE prepro_producto_cod = $codigo");
		return $precio->fetch();*/
		$sede = $_SESSION["ususede_id"];

		$sql = "SELECT prepro_precven,prepro_predes,prepro_descuento
		FROM tbl_prepro WHERE prepro_producto_cod = $codigo and prepro_sede_id = $sede";

		$sqlObtenerPrecio = $this->_db->query($sql);

		$rptaObtenerPrecio = $sqlObtenerPrecio->fetchAll();		

		foreach($rptaObtenerPrecio as $data) {
			$precven = $data[0];
			$predes = $data[1];
			$descuento = $data[2];
		}		

		if ($descuento!="0") {
			$array = [
				"precio" => "$predes",
				"descuento" => "$descuento",
			];
		}else{

			$array = [
				"precio" => "$precven",
				"descuento" => "$descuento",
			];
		}
		//var_dump($sql);
		return $array;
	}

	public function getProducto() {
		$producto = $this->_db->query("SELECT * FROM tbl_producto where sede_id = ".$_SESSION["ususede_id"] );
		//$producto = $this->_db->query("SELECT * FROM tbl_producto where sede_id = ");
		return $producto->fetchAll();
	}

	public function getProductos() {
		
		$sql = "SELECT 
		p.*,
		tp.tippro_descripcion 
		FROM
		tbl_producto p 
		INNER JOIN tbl_tippro tp ON tp.tippro_id = producto_tippro_cod 
		WHERE p.sede_id = ".$_SESSION["ususede_id"];

		$producto = $this->_db->query($sql);

		//var_dump($sql);

		return $producto->fetchAll();
	}


	public function getProductosInventario() {
		
		/*
			$sql = "SELECT 
				p.*,
				tp.tippro_descripcion 
			FROM
				tbl_producto p 
				INNER JOIN tbl_tippro tp ON tp.tippro_id = producto_tippro_cod";
		*/


				$sql = "SELECT
				p.producto_cod AS cod,
				CONCAT(p.producto_descripcion,' - ',p.producto_especificacion) AS producto,		
				p.producto_detalle AS productodetalle,
				pp.prepro_precven AS preven,
				pp.prepro_descuento AS descuento,
				pp.prepro_predes AS predes,
				p.producto_id AS id,
				p.sede_id AS sede,
				pp.prepro_sede_id
				FROM tbl_producto p
				JOIN tbl_prepro pp ON p.producto_cod = pp.prepro_producto_cod
				WHERE pp.prepro_sede_id = ".$_SESSION["ususede_id"];



				$producto = $this->_db->query($sql);

		//var_dump($sql);

				return $producto->fetchAll();
			}



			public function getTipdocref() {
				$Tipdocref = $this->_db->query("SELECT tipdocref_cod  FROM tbl_tipdoc_ref where tipdocref_tipdoc_referencia=");
				return $Tipdocref->fetchAll();
			}



			public function getTipPro()	{
				$tippro = $this->_db->query("SELECT * FROM tbl_tippro");
				return $tippro->fetchAll();
			}

			public function getTipdoc_comprobante()	{
				$Tipdoc_comprobante = $this->_db->query("SELECT * FROM tbl_tipdoc WHERE tipdoc_referencia = 101 AND tipdoc_cod <>004");
				return $Tipdoc_comprobante->fetchAll();
			}


















	public function getDistritos($coddpto,$codprov) {
				$sql ="
				SELECT
				`u`.`coddis` AS coddis,
				`u`.`nomdis` AS distrito
				FROM ubigeo u
				WHERE u.codprov = '".$codprov."' AND u.codpto = '".$coddpto."'
				GROUP BY `u`.`nomdis`
				ORDER BY `u`.`nomdis` ASC
				";

		/*var_dump($sql);
		exit();*/

		$ubigeo = $this->_db->query($sql);
		return $ubigeo->fetchAll();
	}



















	/* ------------- */ 

	public function llamarCombo()
	{	
		
		$servicios = $this->_db->query("SELECT idservicio,descripcion FROM servicio WHERE estado = 1 ");
		


		return $servicios->fetchAll();

	}












	public function cargarTabla($idservicio)
	{
		


		$datos = $this->_db->query("
			SELECT
			co.producto_id AS idconcepto,
			co.producto_descripcion AS descripcion,
			(IF(sc.obligatorio = 1,'SI','NO')) AS obligatorio,
			sc.cantidad AS cantidad,
			co.sede_id AS sede
			FROM tbl_producto co

			LEFT JOIN servicioconcepto sc ON sc.idconcepto = co.producto_id AND sc.idservicio =  $idservicio
			WHERE co.sede_id =  ".$_SESSION['ususede_id']);






		return $datos->fetchAll();
	}


	public function cargarTabla2($idservicio)
	{
		$datos = $this->_db->query("SELECT
			re.idrequisito as idrequisito,
			re.descripcion as descripcion,
			(IF(sr.obligatorio = 1,'SI','NO')) AS obligatorio
			FROM requisito re
			LEFT JOIN serviciorequisito sr ON sr.idrequisito = re.idrequisito AND sr.idservicio = $idservicio
			");
		return $datos->fetchAll();
	}

	/**
	 * Buscar Clientes
	 */
	public function buscarClienteNombre($cliente) {
		$clientes = $this->_db->query("SELECT
			*,
			CONCAT(nombres, ' ', apellidos) as nombrecompleto
			FROM cliente
			WHERE CONCAT(nombres, ' ', apellidos) LIKE '%$cliente%'");
		$clientes = $clientes->fetchAll();
		$return_array = array();

		foreach ($clientes as $c) {
			$data["value"] = $c["nombrecompleto"];
			$data["direccion"] = $c["direccion"];
			$data["documento"] = $c["documento"];
			array_push($return_array, $data);
		}

		return $return_array;
	}

	public function buscarClienteDocumento($documento) {
		$clientes = $this->_db->query("SELECT
			*,
			CONCAT(nombres, ' ', apellidos) as nombrecompleto
			FROM cliente
			WHERE documento LIKE '%$documento%'");
		$clientes = $clientes->fetchAll();
		$return_array = array();

		foreach ($clientes as $c) {
			$data["value"] = $c["documento"];
			$data["direccion"] = $c["direccion"];
			$data["cliente"] = $c["nombrecompleto"];
			array_push($return_array, $data);
		}

		return $return_array;
	}

	public function buscarTipoRubro($rubro) {
		$tiporubro = $this->_db->query("SELECT
			*
			FROM tbl_tiprub
			WHERE tiprub_descripcion LIKE '%$rubro%'");
		$tiporubro = $tiporubro->fetchAll();
		$return_array = array();

		foreach ($tiporubro as $tr) {
			$data["codigo"] = $tr["tiprub_cod"];
			$data["value"] = $tr["tiprub_descripcion"];
			array_push($return_array, $data);
		}

		return $return_array;
	}

	/**
	 * Devolver Parametros para mostrar o ocultar campos
	 */
	public function getParametros($campo) {
		if($campo != null) {
			$parametros = $this->_db->query("SELECT par_valor FROM tbl_parametros WHERE par_desc = '$campo'");
			return $parametros->fetch();
		} else {
			$parametros = $this->_db->query("SELECT par_valor FROM tbl_parametros");
			return $parametros->fetchAll();
		}
	}




	/* ------------------- CUMPLEAÑOS -------------------*/

	public function getCumple() {

		$datos = $this->_db->query("SELECT
			UPPER(CONCAT(cli_nombres,' ',cli_apellidos)) as nombre,
			cli_fecnac as fecnac,
			cli_id as id
			FROM tbl_cliente
			WHERE month(cli_fecnac) = month(now()) AND (day(cli_fecnac) >= day(now()) AND day(cli_fecnac) <= day(now()) + 5) AND cli_sede_id = ".$_SESSION["usused_id"]);
		return $datos->fetchAll();
	}
	



	/*CONCAT(ELT(WEEKDAY(asiper_fecha) + 1, 'Lunes', 'Martes', 'Miercoles', 'Juevez', 'Viernes', 'Sabado', 'Domingo')) AS dia_semana*/

	public function getAsistencia() {
		

		$datos = $this->_db->query("SELECT
			asiper_id as id,asiper_fecha as fecha,asiper_horing as horing FROM tbl_asiper
			WHERE asiper_usuario_cod = '".$_SESSION["usuario_cod"]."' AND asiper_sede_id = '".$_SESSION["ususede_id"]."' AND CURDATE() = asiper_fecha");

		/*var_dump($datos);
		exit();*/

		return $datos->fetch();
	}

	public function getAsistenciaSalida() {
		
		$sql = "SELECT  asiper_id as id,asiper_horsal as horsal	FROM tbl_asiper
		WHERE asiper_usuario_cod = '".$_SESSION["usuario_cod"]."' AND asiper_sede_id = '".$_SESSION["ususede_id"]."' AND CURDATE() = asiper_fecha";

		$datos = $this->_db->query($sql);
		/*var_dump($sql);*/

		return $datos->fetch();
	}


	public function getAsistenciaAnterior($usucod,$sede) {
		

		$datos = $this->_db->query("
			SELECT 
			asiper_id AS id,
			asiper_fecha AS fecha,
			asiper_horsal AS horsal
			FROM
			tbl_asiper 
			WHERE asiper_usuario_cod = '".$usucod."' 
			AND asiper_sede_id = '".$sede."'
			AND asiper_fecha = DATE(DATE(NOW())-1)");

		/*var_dump($datos);
		exit();*/

		return $datos->fetch();
	}















































	public function getCiudad() {

		$sql = "SELECT DISTINCT ubi_coddep,ubi_nomdep FROM tbl_ubigeo GROUP BY ubi_nomdep";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getGenero() {

		$sql = "SELECT
				  gen_id,
				  gen_des,
				  gen_usu_id,
				  gen_fecreg,
				  gen_fecact,
				  gen_ip
				FROM
				  tbl_genero";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getDocide() {

		$sql = "SELECT
				  docide_id,
				  docide_des,
				  docide_descor,
				  docide_usu_id,
				  docide_fecreg,
				  docide_fecact,
				  docide_ip
				FROM
				  tbl_docide";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getEstciv() {

		$sql = "SELECT
				  estciv_id,
				  estciv_des,
				  estciv_usu_id,
				  estciv_fecreg,
				  estciv_fecact,
				  estciv_ip
				FROM
				  tbl_estciv";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getLiccon() {

		$sql = "SELECT
				  liccon_id,
				  liccon_des,
				  liccon_usu_id,
				  liccon_fecreg,
				  liccon_fecact,
				  liccon_ip
				FROM
				  tbl_liccon";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getPerres() {

		$sql = "SELECT
				  perres_id,
				  perres_des,
				  perres_usu_id,
				  perres_fecreg,
				  perres_fecact,
				  perres_ip
				FROM
				  tbl_perres
				";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getTipjer() {

		$sql = "SELECT
				  tj.tipjer_id AS id,
				  tj.tipjer_des AS texto
				FROM
				  tbl_tipjer tj";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getRansal() {

		$sql = "SELECT
				  rs_id,
				  rs_des,
				  rs_usu_id,
				  rs_fecreg,
				  rs_fecact,
				  rs_ip
				FROM
				  tbl_ransal
				";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getTiplin() {

		$sql = "SELECT
				  tiplin_id as id,
				  tiplin_des as texto,
				  tiplin_usu_id,
				  tiplin_fecreg,
				  tiplin_fecact,
				  tiplin_ip
				FROM
				  tbl_tiplin";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getPais() {

		$sql = "SELECT
				  pais_id AS id,
				  pais_des AS texto,
				  pais_descor
				FROM
				  tbl_pais";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getDepartamento() {

		$sql = "SELECT DISTINCT
				u.ubi_coddep AS id,
				u.ubi_nomdep AS texto
				FROM tbl_ubigeo u";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getEmpresa($name) {

		$sql = "SELECT
				  pri_id as id,
				  pri_des as texto
				FROM
				  tbl_pricos where pri_des LIKE '%$name%'";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getSector($name) {

		$sql = "SELECT
				  sec_id as id,
				  sec_des as texto
				FROM
				  tbl_sector where sec_des LIKE '%$name%'";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getSubsector($id) {

		$sql = "SELECT
				  ss_id,
				  ss_sec_id,
				  ss_des,
				  ss_fecreg,
				  ss_fecact,
				  ss_ip
				FROM
				  tbl_subsec WHERE ss_sec_id = $id";



		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getActividad($id) {

		$sql = "SELECT
				  act.act_id AS id,
				  act.act_des AS texto
				FROM
				  tbl_actividad act
				WHERE act.act_ss_id = $id";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getSubact($id) {

		$sql = "SELECT
				  sa.sa_id AS id,
				  sa.sa_des AS texto
				FROM
				  tbl_subact sa
				  WHERE sa.sa_act_id = $id";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getArea() {

		$sql = "SELECT
				  a.are_id as id,
				  a.are_des as texto
				FROM
				  tbl_area a";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getMotfin() {

		$sql = "SELECT
				  mf.mf_id AS id,
				  mf.mf_des AS texto
				FROM
				  tbl_motfin mf";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getNivest() {

		$sql = "SELECT
				  ne.ne_id AS id,
				  ne.ne_des AS texto
				FROM
				  tbl_nivest ne";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getTce() {

		$sql = "SELECT
				  tce.tce_id AS id,
				  tce.tce_des AS texto
				FROM
				  tbl_tce tce";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}


	public function getUniv() {

		$sql = "SELECT
				  u.u_id AS id,
				  u.u_des AS texto
				FROM
				  tbl_univ u";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getUnifac() {

		$sql = "SELECT
				  uf.uf_id AS id,
				  uf.uf_des AS texto
				FROM
				  tbl_unifac uf";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getUnicar($id) {

		$sql = "SELECT
				  uc.uc_id AS id,
				  uc.uc_des AS texto 
				FROM
				  tbl_unicar uc
				  WHERE uc.uc_unifac_id = $id";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getEscpos() {

		$sql = "SELECT
				  ep.ep_id AS id,
				  ep.ep_des AS texto
				FROM
				  tbl_escpos ep";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getIdioma($name) {

		$sql = "SELECT
				  i.idi_id AS id,
				  i.idi_des AS texto
				FROM
				  tbl_idioma i where i.idi_des LIKE '%$name%'";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function getTipviv() {

		$sql = "SELECT
				  tv_id AS id,
				  tv_des AS texto,
				  tv_usu_id,
				  tv_fecreg,
				  tv_fecact,
				  tv_ip
				FROM
				  tbl_tipviv";
				  
		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function b_cor($cor)
	{
		
		$sql = "SELECT usu_id AS rand  FROM tbl_usuario WHERE usu_cor = '".strtolower(trim($cor))."' ";

		$querySql = $this->_db->query($sql);

		return $querySql->fetch();

	}

	public function getLugTra() {

		$sql = "SELECT
				  lt.lt_id AS id,
				  lt.lt_des AS texto
				FROM
				  tbl_lugtra lt";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}

	public function guardarHoraIngreso()
	{	
		//$fecha = date('Y-m-d H:i:s');

		$fecha = date('Y-m-d');

		$hora = date('H:i:s');

		$timestamp = date('Y-m-d H:i:s');

		$sqlInsertar = "INSERT INTO tbl_asiper (asiper_fecha,asiper_horing,asiper_usuario_cod,asiper_sede_id,asiper_fhing) VALUES(
			'".$fecha."',
			'".$hora."',
			'".$_SESSION["usuario_cod"]."',
			'".$_SESSION["usuario_sede"]."',
			'".$timestamp."'
		)";

		/*var_dump($sqlInsertar);
		exit();*/

		$rpta = $this->_db->exec($sqlInsertar);

	}


	public function guardarHoraSalida($id)
	{	

		$fecha = date('Y-m-d');

		$hora = date('H:i:s');

		$timestamp = date('Y-m-d H:i:s');

		$sqlInsertar = "UPDATE tbl_asiper SET asiper_horsal = '".$hora."', asiper_fhsal = '".$timestamp."' WHERE asiper_id = '".$id."'";

		$rpta = $this->_db->exec($sqlInsertar);

	}

	public function getSectorEmpresa() {

		$sql = "SELECT
				  sec_id as id,
				  sec_des as texto
				FROM
				  tbl_sector ORDER BY sec_des ASC";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}



	public function getProvincia($coddpto) {

		$sql ="SELECT
		  u.ubi_codpro AS codigo,
		  u.ubi_nompro AS texto
		FROM
		  tbl_ubigeo u
		WHERE u.ubi_coddep = '".$coddpto."'
		GROUP BY u.ubi_nompro
		";

		$ubigeo = $this->_db->query($sql);

		return $ubigeo->fetchAll();

	}


	public function getDistrito($coddpto,$codpro) {

		$sql ="
		SELECT
		  u.ubi_coddis AS codigo,
		  u.ubi_nomdis AS texto
		FROM
		  tbl_ubigeo u
		WHERE u.ubi_coddep = '".$coddpto."' AND u.ubi_codpro = '".$codpro."'
		GROUP BY u.ubi_coddis
		";

		$ubigeo = $this->_db->query($sql);
		
		return $ubigeo->fetchAll();

	}


	public function getTipoTrabajo() {

		$sql = "SELECT
				  tt_id as id,
				  tt_des as texto
				FROM
				  tbl_tiptra";

		$rptaSQL = $this->_db->query($sql);

		return $rptaSQL->fetchAll();
		
	}











}

?>