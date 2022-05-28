<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="fixed-header">
        <div class="container">
            Formulario de prueba
            <nav>
                <a href="index.php?ruta=registro">Login</a>
                <a href="index.php?ruta=ingreso">Ingreso</a>
                <a href="index.php?ruta=eventos">Eventos</a>
                <a href="index.php?ruta=aboutus">About Us</a></nav>
        </div>
    </div>
    <?php
    if (isset($_GET["ruta"])){
        if ($_GET["ruta"] == "registro" ||
            $_GET["ruta"] == "ingreso" ||
            $_GET["ruta"] == "eventos" ||
            $_GET["ruta"] == "editar" ||
            $_GET["ruta"] == "aboutus"){
          include "paginas/" . $_GET["ruta"] . ".php";
        } else{
            include "paginas/404.php";
        }
    } else {
        include "paginas/registro.php";
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="vistas/js/script.js"></script>

</body>
</html>