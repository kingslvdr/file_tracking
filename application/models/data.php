<?php

header('Access-Control-Allow-Origin: *');
// session_start();
date_default_timezone_set('Asia/Manila');

class Data{
    private $database;
	private $mysql;

	function __construct()
	{
		$this->database = new Controller();
		$this->mysql = $this->database->getDb();

	}

	public function getUser(){
		$query = "SELECT USER_ID, USER_NAME from users_list";
		$stmt = $this->mysql->prepare($query);
		$stmt->execute();
		$res = $stmt->get_result();
		while ($row = $res->fetch_array(MYSQLI_BOTH)){
			$data[] = array(
				'fName'=>$row['USER_NAME'],
				'id'=>$row['USER_ID']
			);
		}
		return $data;
	}
}