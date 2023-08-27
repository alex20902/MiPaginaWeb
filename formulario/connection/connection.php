<?php

$hostname = "Localhost";
$username = "root";
$password = "";
$database ="formulario";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection){
    die("Conexion fallida: " .mysqli_connect_error());

}

?>