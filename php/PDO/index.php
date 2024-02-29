<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "pdo_test";

    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    if($conexion){
        echo "Conectado con exito, PDO";
    }
?>