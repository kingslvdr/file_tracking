<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    $fullname = htmlentities($_POST['fullname']);
    $email = htmlentities($_POST['email']);
    
    $result = $function->register_user($username, $password, $fullname, $email);
    echo json_encode($result);
}
else{
	echo "error";
}
