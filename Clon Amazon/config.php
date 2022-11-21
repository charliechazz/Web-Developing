<?php

$host = "localhost";
$user = "root";
$password = "";
$basedatos = "usuario_amazon";

$conexion = new mysqli($host,$user,$password,$basedatos);

if($conexion->connect_errno){
    die("Ha Ocurrido Un Error");
}

?>