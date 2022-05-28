<?php

session_start();

session_destroy();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="wrap">
        <h1>Inicio</h1>
        <form action="" method="POST">
            
            <label for="usuario">Usuario: </label>
            <input type="text" id="usuario" name="ingresoUsuario" placeholder="Usuario">

            <label for="pwd">Contraseña: </label>
            <input type="password" id="pwd" name="ingresoPassword" placeholder="Password">

            <input type="submit" class="btn btn-primary" value="Iniciar">
        </form>
    </div>

    <?php
        
        $ingreso = new ControladorFormularios();
        $ingreso ->ctrIngreso();

    ?>
</body>
</html>

