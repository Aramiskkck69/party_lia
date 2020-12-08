<?php
class conectar{

    public function conexion(){
         $conexion = mysqli_connect("localhost", 'root',"","party");

     return $conexion;
    }



}
$obj = new conectar();








