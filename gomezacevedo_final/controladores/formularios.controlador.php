<?php

class ControladorFormularios {

//registro

    static public function ctrRegistro() {
        if (isset($_POST["registroUsuario"])){
            $tabla = "registro";
            $datos = array(
                "usuario" => $_POST["registroUsuario"],
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"]
            );
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;

        }
    }
 


//seleccionar registros

    static public function ctrSeleccionarRegistros($item, $valor){
        $tabla = "registro";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
        return $respuesta;
    }



//Ingreso 

    public function ctrIngreso(){
        if (isset($_POST["ingresoUsuario"])){
            
            $tabla = "registro";
            $item = "usuario";
            $valor = $_POST["ingresoUsuario"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
            
            if ($respuesta["usuario"] == $_POST["ingresoUsuario"] && $respuesta["password"] == $_POST["ingresoPassword"]){
                session_start();
                $_SESSION["validarIngreso"] = "ok";
                //var_dump($_SESSION);
                //die("");
                echo '<script>
                
                if ( window.history.replaceState ) {

                    window.history.replaceState( null, null, window.location.href );

                }    
                
                window.location = "index.php?ruta=eventos";

                </script>';

            } else {

                echo '<script>
                
                if (window.history.replaceState) {

                    window.history.replaceState( null, null, window.location.href );

                }    


                </script>';

                echo '<div class="alert error"> Error al ingresar. Usuario o Contraseña incorrectos. </div>';

            }
        }
    }

    //Actualizar Registros

    static public function ctrActualizarRegistro(){
        
        if (isset($_POST["actualizarUsuario"])){
            
            if ($_POST["actualizarPassword"] != ""){

                $password = $_POST["actualizarPassword"];

            } else {

                $password = $_POST["passwordActual"];

            }

            $tabla = "registro";
            
            $datos = array(
                "id" => $_POST["idUsuario"],
                "usuario" => $_POST["actualizarUsuario"],
                "nombre" => $_POST["actualizarNombre"],
                "email" => $_POST["actualizarEmail"],
                "password" => $_POST["actualizarPassword"]
            );

            $respuesta = ModeloFormularios::mdlActualizarRegistros($tabla, $datos);
            
            if ($respuesta == "ok" ){
                
                echo '<script>
                
                if ( window.history.replaceState ) {

                    window.history.replaceState( null, null, window.location.href );

                }    
                
                window.location = "index.php?ruta=registro";

                </script>';

            } 
        }
    }

    //eliminar registro

    static public function ctrEliminarRegistro(){
        
        if (isset($_POST["eliminarRegistro"])){
            
            $tabla = "registro";
            $valor = $_POST["eliminarRegistro"];
            
            $respuesta = ModeloFormularios::mdlEliminarRegistros($tabla, $valor);
            
            if ($respuesta == "ok" ){
                
                echo '<script>
                
                if ( window.history.replaceState ) {

                    window.history.replaceState( null, null, window.location.href );

                }    
                
                window.location = "index.php?ruta=eventos";

                </script>';

            } 
        }
    }

}