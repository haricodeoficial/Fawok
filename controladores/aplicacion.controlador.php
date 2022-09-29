<?php

class controladorAplicacion{
    public function plantilla(){
        include "vistas/plantilla.php"; 
    }
    static public function tabla($item, $valor){
        $tabla = "nombre_tabla";
        $respuesta = modeloAplicacion::modelosAplicacionDatos($tabla,$item,$valor); 
        return $respuesta; 
    }
}