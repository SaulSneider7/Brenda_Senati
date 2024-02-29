<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Usuarios</title>
</head>
<body>
    <h1>CRUD de Usuarios</h1>
    <a href="agregar.php">Agregar Usuario</a>
    <br><br>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
        <?php include 'funciones.php'; mostrarUsuarios(); ?>
    </table>
</body>
</html>
