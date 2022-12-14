<?php
require_once "conexion.php"; 
class modeloAplicacion{
    static public function modeloAplicacionDatos($tabla, $item, $valor){
        if ($item != null) {
            $stmt = conexionBaseDeDatos::conectar()->prepare("SELECT *FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item,$valor,PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
            }
            else{
                $stmt = conexionBaseDeDatos::conectar()->prepare("SELECT * FROM $tabla");
                $stmt -> execute();
                return $stmt ->fetchAll();
            }
    $stmt -> close();
    $stmt = null;
    
    }
}