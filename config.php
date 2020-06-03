<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');
header("HTTP/1.1 200 OK");
$db = [
    'host' => 'localhost',
    'username' => 'luabarre',
    'password' => '123',
    'db' => 'rest' 
];

?>
