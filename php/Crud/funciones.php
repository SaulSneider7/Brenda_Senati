<?php
include 'conexion.php';

function mostrarUsuarios() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM usuarios");
    while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$usuario['nombre']}</td>";
        echo "<td>{$usuario['apellido']}</td>";
        echo "<td>{$usuario['edad']}</td>";
        echo "<td><a href='editar.php?id={$usuario['id']}'>Editar</a> | <a href='funciones.php?eliminar={$usuario['id']}'>Eliminar</a></td>";
        echo "</tr>";
    }
}

function agregarUsuario($nombre, $apellido, $edad) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, apellido, edad) VALUES (?, ?, ?)");
    $stmt->execute([$nombre, $apellido, $edad]);
}

function obtenerUsuario($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function editarUsuario($id, $nombre, $apellido, $edad) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE usuarios SET nombre=?, apellido=?, edad=? WHERE id=?");
    $stmt->execute([$nombre, $apellido, $edad, $id]);
}

function eliminarUsuario($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id=?");
    $stmt->execute([$id]);
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['agregar'])) {
        agregarUsuario($_POST['nombre'], $_POST['apellido'], $_POST['edad']);
        header('Location: index.php');
    } elseif(isset($_POST['editar'])) {
        editarUsuario($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['edad']);
        header('Location: index.php');
    }
}

if(isset($_GET['eliminar'])) {
    eliminarUsuario($_GET['eliminar']);
    header('Location: index.php');
}
?>
