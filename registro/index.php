<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!--Llamado a hoja de estilos css!-->
    <link rel="stylesheet" href="hojaEstilos.css"> 
</head>
<body>
     <!--el formulario será enviado por metodo post-->
    <form method="post" class="formulario"> 
        <h2>¡Bienvenid@ a EncantoTextil!</h2>
        <p>Por favor, inicia tu registro</p>
        <!-- Campo para ingresar el nombre -->
        <div class="input-wrapper">
            <input type="text" id="name" name="name" placeholder="Nombre">
        
        </div>
        <!-- Campo para ingresar el correo -->
        <div class="input-wrapper">
            <input type="text" id="email" name="email" placeholder="E-mail">
        </div>
        <!-- Campo para ingresar la contraseña -->
        <div class="input-wrapper">
            <input type="password" id="password" name="password" placeholder="Contraseña">
        </div>
        <!-- Campo para ingresar el rut-->
        <div class="input-wrapper">
            <input type="text" id="rut" name="rut" placeholder="RUT">
        </div>

        <!-- boton para enviar el formulario -->
        <input class="btn" type="submit" name="register" value="Crear tu cuenta">
    </form>
    <?php
        include("registrar.php");
     ?>
</body>
</html>