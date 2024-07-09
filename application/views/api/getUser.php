<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $result = $function->getUser();
    echo json_encode($result);
}
else{
	echo "error";
}
