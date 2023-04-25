<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloInicio.css">
    <title>San Lorenzo</title>
</head>
<body>
    
    <divn class="contenedor">
        <h1>Inicio de sesion</h1>
            <form method="POST">
            <label for="username">Usuario:</label>
            <input type="txt" name="username" id="username">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" >
            <input type="submit" name="Login">
            </form>
            <?php
    include("conexcion_db.php");
    include("controlador.php");
    ?>
            
    </div>
    <script src="script.js"></script>
</body>
</html>