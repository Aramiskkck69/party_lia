<?php
//Conexion a la base de datos
$conexion = mysqli_connect("localhost", 'root',"","party");

//if (mysqli_connect_errno()){
//    echo "La conexion a la base de datos ha fallado" .mysqli_connect_error();
//    die();
//}
//else{
//    echo "Conexion hecha correctamente" . "<br/>";
//
//}
// query para codificar caracteres

mysqli_query($conexion,"SET NAMES 'utf8'");


