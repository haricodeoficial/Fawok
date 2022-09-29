<?php



require_once "../controladores/aplicacion.controlador.php"; 
require_once "../modelos/aplicacion.modelo.php";

class ajaxAplicacion{
    public function ajaxEstiloAplicacion(){
        $respuesta = controladorAplicacion::plantilla(); 
        echo json_decode($respuesta); 
    }
}

$objeto = new ajaxAplicacion(); 
$objeto -> ajaxEstiloAplicacion();