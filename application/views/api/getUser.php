<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $username = htmlentities($_GET['username']);
    $password = htmlentities($_GET['password']);


    $result = $function->get_user($username,$password);
    echo json_encode($result);
}
else{
	echo "error";
}
