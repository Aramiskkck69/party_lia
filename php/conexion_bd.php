<?php
//Conexion a la base de datos
 $conexion = mysqli_connect("localhost", 'root',"","party");


// query para codificar caracteres

mysqli_query($conexion,"SET NAMES 'utf8'");


