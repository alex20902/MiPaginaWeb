<?php
    $hostname = "Localhost";
    $username = "root";
    $password = "root";
    $database = "MIPAGINA_US_tickets";

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if(!$connection){
        die("Database connection failed: " . mysqli_connect_error());
    }
?>