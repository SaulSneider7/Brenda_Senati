<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "pdo_test";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
    //echo "Conectado con exito, PDO";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>
