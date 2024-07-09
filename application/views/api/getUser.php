<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $result = $function->get_user();
    echo json_encode($result);
}
else{
	echo "error";
}
