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
    <h1>fhdfshsdfhf
        fdsh
        hfhfdshsf
        dhfsdfhfdh
        fhdfshsdfhfhhfdhfdhfds
        hffhfdhfhfhdf
        hsfdhfdhfdhdfhdfh
        dsfhdsfhdfhhdfhfd
        dsfhdfshdfhdfhdfhddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddgsdgdgdgsdg
        Eventos</h1>
</body>
</html>


<?php
session_start();

if (!isset($_SESSION["validarIngreso"])){

    echo '<script> window.location="index.php?ruta=ingreso";</script>';

    return;

} else {

    if ($_SESSION["validarIngreso"] != "ok"){

        echo '<script> window.location="index.php?ruta=ingreso";</script>';

        return;

    }

}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>


<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>Usuarios</h2>

<table style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Opciones</th>
        </tr>
    </thead>
  
    <tbody>
    
    <?php foreach ($usuarios as $key => $value): ?>

        <tr>
            <td><?php echo ($key+1); ?> </td>
            <td><?php echo $value["usuario"]; ?> </td>
            <td><?php echo $value["nombre"]; ?> </td>
            <td><?php echo $value["email"]; ?> </td>
            <td><?php echo $value["date"]; ?> </td>
            <td>
            
            <div>
                <a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>" class="boton_editar">Editar</a>
                
                <form method="post">

                    <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">

                    <button type= "submit" style="btn btn-primary">Borrar</button>

                    <?php 

                        $eliminar = new ControladorFormularios();
                        $eliminar -> ctrEliminarRegistro();

                    ?>


                </form>
            </div>
            </td>
        </tr>
    <?php endforeach ?>

    </tbody>

</table>


</body>
</html>



