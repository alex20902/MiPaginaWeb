<?php
//print_r($_POST);//

require('../connection/connection.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$query = "INSERT INTO usuario (nombre, email, telefono) VALUES ('$nombre','$email','$telefono')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.html");

//print("<br> nombre del usuario: " . $nombre . " email: " . $email . " telefono: " . $telefono );//
?>