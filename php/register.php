<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta usuarios</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Nombre usuario:</label><br>
        <input type="text" name="user"><br>
        <label>Correo usuario:</label><br>
        <input type="email" name="user"><br>
        <label>Contraseña usuario:</label><br>
        <input type="password" name="user"><br>
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>
<?php

?>