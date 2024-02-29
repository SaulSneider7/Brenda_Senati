<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form action="funciones.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <br>
        <input type="submit" name="agregar" value="Agregar">
    </form>
</body>
</html>
