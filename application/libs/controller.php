<?php
 
class Controller {
 
	private $db;

	function __construct(){

		$this->db = new mysqli(host, user, password, database);
		if (!$this->db) {
		    $e = $this->db->connect_error;
			putenv("NLS_LANG=AMERICAN_AMERICA.AL32UTF8");
		    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
	}


	public function getDb(){
		return $this->db;
	}

	 public function loadModel($model_name){
        require 'application/models/' . strtolower($model_name) . '.php';
        return new $model_name($this->db);
    }


	public function error(){
		$res = array(
			'connection' => false,
			'message' => 'connection problem'
		);
		return $res;
	}

	
}
