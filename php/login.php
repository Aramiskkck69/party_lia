<?php
//Conexion a la base de datos
$conexion = mysqli_connect("localhost", 'root',"","party");

    if (mysqli_connect_errno()){
        echo "La conexion a la base de datos ha fallado" .mysqli_connect_error();
    }
    else{
        echo "Conexion hecha correctamente" . "<br/>";
    }
// query para codificar caracteres
    mysqli_query($conexion,"SET NAMES 'utf8'");
// Consulta SELECT
    $query = mysqli_query($conexion, "SELECT * FROM usuarios");

    while($usuario = mysqli_fetch_assoc($query)){ //Convierte en un array la consulta
        $NoInv = $usuario ['NoInv'] ;
        $nombre = $usuario ['nombre'] ;
    }
    if ($nombre > 5){
       echo "si jala este pedo weeee";
   }
    else{
        echo "el numero de invitados permitidos es: " . $NoInv ."<br/>";
    }

    echo $nombre;

?>





