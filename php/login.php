<?php

require_once 'conexion.php';


if(isset($_POST)){
    $name = trim($_POST["userName"]);
    $cell = trim($_POST["userCell"]);
}
// Consulta SELECT
    $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE telefono = '$cell'");

//SELECT * FROM usuarios WHERE telefono = '$cell'

    if ($query && mysqli_num_rows($query) == 1){
        echo "El usuario existe" ."<br/>" ;
            while($usuario = mysqli_fetch_assoc($query)){ //Convierte en un array la consulta
                $NoInv = (int)$usuario ['NoInv'] ;
                $cell_bd = (int)$usuario ['telefono'] ;
                echo $NoInv ."<br/>";
                echo $cell_bd."<br/>";
            }
        $query2 = mysqli_query($conexion, "SELECT * FROM invitados WHERE telefono_us = '$cell'");
            while($usuario2 = mysqli_fetch_assoc($query2)){ //Convierte en un array la consulta
                $nombre = $usuario2 ['nombre'] ;
                $apellido = $usuario2 ['apellido'] ;
                echo $nombre ."<br/>";
                echo $apellido."<br/>";
            }
    }
    else{
        echo "El usuario no existe" ."<br/>";
        echo  "jejej xd";
    }

?>





