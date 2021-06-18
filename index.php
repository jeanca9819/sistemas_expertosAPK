<?php 

    //Insertar código de otros archivos para hacer uso de ellos.  
    require_once "public/configuration/configuration.php";
    require_once "core/route.php";
    require_once "controllers/indexController.php";
    require_once "controllers/alojamientoController.php";
    require_once "controllers/atractivoController.php";
    require_once "controllers/paquetesController.php";
    require_once "controllers/vehiculosController.php";

    /*Este if ayuda a identificar el controlador y la acción que se solicitan.
    En caso de no tener nigún conector mostrará la pantalla principal.
    En todo caso se explica más en la carpeta de "core", en el archivo
    "route.php".

    */
    if(isset($_GET['c'])){
        if(isset($_GET['c'])){
            $controlador = cargarControlador($_GET['c']);
            if(isset( $_GET['a'])){
                cargarAccion($controlador, $_GET['a']);
            }else{
                cargarAccion($controlador, ACCION_PRINCIPAL);
            }
        }else{
            $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
            cargarAccion($controlador, ACCION_PRINCIPAL);
        }
    }else{
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
?>
