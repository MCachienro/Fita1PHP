<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practica Formularios</title>
</head>
<body>
    <h1>Formulario de Login</h1>
    <form action="actionpage.php" method="post">
        <label for="fname">Usuari:</label><br>
        <input type="text" id="fname" name="fname" required><br><br>

        <label for="lname">Contraseña:</label><br>
        <input type="password" id="lname" name="lname" required><br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
