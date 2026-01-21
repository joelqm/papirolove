<?php


class ResponseException extends Exception 
{
    private $sql = '';
    private $params = '';

    public function __construct($message, $sql, $params) 
    {
        $this->sql = $sql;
        $this->params = $params;
        parent::__construct($message);
    }

    public function getSql()
    {
		foreach ($this->params as $key => $value) {
			$this->sql = str_replace($key, $value, $this->sql);
		}
        return $this->sql;
    }
}


class Model{
	protected $_db;

	public function __construct(){
		$this->_db = new Database();
	}

	
	public function fetchType($obj, $fetchAll) {
		if($fetchAll == true)
			return $obj->fetchAll();
		else 
			return $obj->fetch();
	}

	// Asignamos un array vacío por defecto a $params para que sea opcional
	public function postData($sql, $functionName = "--", $params = []) {
		try {
			$rs = $this->_db->prepare($sql);
			$response = $rs->execute($params);
			if($response == false) {
				throw new ResponseException("Error en la consulta(POST/UPDATE)", $sql, $params);
			}
			return $rs;
		} catch(PDOException $e) {
			file_put_contents("PDOErrorLog.txt","Error:" . $e->getMessage() . "\nIn $functionName\nQuery:'" . $sql ."'\n\n", FILE_APPEND); //$ - json_encode($responseJson)
			return false;
		} catch(ResponseException $e) {
			file_put_contents("ExceptionLog.txt", "Error:" . $e->getMessage() . " In $functionName\nQuery:" . $e->getSql() ."\n\n", FILE_APPEND); //$ - json_encode($responseJson)
			return false;
		}
	}

	public function getData($sql, $functionName = "--", $fetchAll = true) {
		try {
			$rptaSql = $this->_db->query($sql);
			if($rptaSql == false) {
				throw new Exception("Error en la consulta(GET)", 1);
			}
			return $this->fetchType($rptaSql, $fetchAll);
		} catch(PDOException $e) {
			file_put_contents("PDOErrorLog.txt", "In $functionName\nQuery:'" . $sql ."'\nError:" . $e->getMessage() ."\n\n", FILE_APPEND); //$ - json_encode($responseJson)
			$rs = $this->_db->prepare($sql);
			$rs->execute();
			return $this->fetchType($rs, $fetchAll);
		} catch(Exception $ee) {
			file_put_contents("ExceptionLog.txt", "In $functionName\nQuery:" . $sql ."\nError:" . $ee->getMessage() ."\n\n", FILE_APPEND); //$ - json_encode($responseJson)
			$rs = $this->_db->prepare($sql);
			$rs->execute();
			return $this->fetchType($rs, $fetchAll);
		}
	}
}

?>
