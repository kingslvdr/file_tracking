<?php

header('Access-Control-Allow-Origin: *');
// session_start();
date_default_timezone_set('Asia/Manila');

class Data
{
	private $database;
	private $mysql;

	function __construct()
	{
		$this->database = new Controller();
		$this->mysql = $this->database->getDb();

	}

	public function get_user()
	{
		$query = "SELECT USER_ID, USER_NAME from users_list";
		$stmt = $this->mysql->prepare($query);
		$stmt->execute();
		$res = $stmt->get_result();
		while ($row = $res->fetch_array(MYSQLI_BOTH)) {
			$data[] = array(
				'fName' => $row['USER_NAME'],
				'id' => $row['USER_ID']
			);
		}
		return $data;
	}

	public function register_user($username, $password, $fullname, $email)
	{
		$password = base64_encode($password);
		$idQ = "SELECT MAX(USER_ID) as USER_ID from users_list";
		$stmt = $this->mysql->prepare($idQ);
		$stmt->execute();
		$res = $stmt->get_result();
		$row = $res->fetch_array(MYSQLI_BOTH);
		if ($row[0] == null) {
			$newUid = 'PH0001';
		} else {
			$uid = $row[0];

			$numericPart = substr($uid, 2);
			$newNumber = intval($numericPart) + 1;
			$newNumberString = sprintf("%04d", $newNumber);
			$newUid = substr($uid, 0, 2) . $newNumberString;
		}
		$newUser = "INSERT INTO users_list (USER_ID, USER_NAME, USER_PASSWORD, USER_FULLNAME, USER_EMAIL)
					VALUES (?,?,?,?,?)";
		$stmt1 = $this->mysql->prepare($newUser);
		$stmt1->bind_param('sssss', $newUid, $username, $password, $fullname, $email);

		if ($stmt1->execute()) {
			return array('success' => 1, 'icon' => 'success', 'message' => 'User Registered');
		} else {
			return array('success' => 0, 'icon' => 'error', 'message' => 'There seems to be a problem.');
		}


	}
}