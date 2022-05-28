<?php

session_start();

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <h1>Registro</h1>
        <form action="" method="POST">
            <label for="">Usuario: </label>
            <input type="text" id="usuario" name="registroUsuario" placeholder="Usuario">

            <label for="">Nombre: </label>
            <input type="text" id="nombre" name="registroNombre" placeholder="Nombre">

            <label for="email">Email: </label>
            <input type="email" id="email" name="registroEmail" placeholder="Email">

            <label for="pwd">Contraseña: </label>
            <input type="password" id="pwd" name="registroPassword" placeholder="Password">

            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>

    <?php

        $registro = ControladorFormularios::ctrRegistro();

        if($registro =="ok"){
                
            echo '<script> 
              if (window.history.replaceState){
                window.history.replaceState(null,null, window.location.href);
              }
              </script>';
              
            echo '<div class="alert success"> El usuario se ha registrado con exito </div>';
          }
         
          ?> 

    ?>


</body>
</html>