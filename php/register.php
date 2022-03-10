<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta usuarios</title>
</head>
<body>
    <form action="#" method="post">
        <label>Nombre usuario:</label><br>
        <input type="text" name="user"><br>
        <label>Correo usuario:</label><br>
        <input type="email" name="email"><br>
        <label>Contraseña usuario:</label><br>
        <input type="password" name="pass"><br>
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>
<?php
    require('operacionesdb.php');

    $operaciones = new OperacionesDB;

    if (isset($_POST['submit'])) {
        $query = $operaciones -> preparar("INSERT INTO usuarios(nombreUsuario, email, contrasenia) VALUES(?,?,?);");
        $query->bind_param("sss",$_POST["user"], $_POST["email"], $_POST["pass"]);
        $query->execute();
    }
?>