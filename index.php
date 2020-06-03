<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("HTTP/1.1 200 OK");
header('content-type: application/json; charset=utf-8');

if ( $_SERVER['REQUEST_METHOD']=='POST')
{
    //CODIGO DEL METODO REST
}

?>