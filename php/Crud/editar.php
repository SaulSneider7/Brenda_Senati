<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php 
    include 'funciones.php'; 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $usuario = obtenerUsuario($id);
        if($usuario) {
    ?>
    <form action="funciones.php" method="post">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $usuario['nombre']; ?>" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="<?php echo $usuario['apellido']; ?>" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" value="<?php echo $usuario['edad']; ?>" required>
        <br>
        <input type="submit" name="editar" value="Editar">
    </form>
    <?php 
        } else {
            echo "Usuario no encontrado.";
        }
    } else {
        echo "ID de usuario no proporcionado.";
    }
    ?>
</body>
</html>
