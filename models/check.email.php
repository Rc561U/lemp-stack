<?php

$db = require_once "database.connect.php";


$str_json = file_get_contents('php://input'); //($_POST doesn't work here)
$response = json_decode($str_json, true);


$email = $response['email'];

$query = $db->prepare( "SELECT `email` FROM `users` WHERE `email` = ?" );
$query->bindValue( 1, $email );
$query->execute();

if( $query->rowCount() > 0 ) {
    echo json_encode(["available" => false]);
}
else {
    echo json_encode(["available" => true]);
}

