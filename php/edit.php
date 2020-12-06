<?php
require "conexion_bd.php";
//$cell = $_SESSION['usuario_tel'] ;

function datos_usario($conexion,$cell,$valor){

    $invitados = "SELECT * FROM invitados WHERE telefono_us = '$cell' ";

    $query1 = mysqli_query($conexion, $invitados);

    while($invitado = mysqli_fetch_assoc($query1)){
        $id = $invitado['id'];
        $name =$invitado ['nombre'];
        $last_name =$invitado ['apellido'];
        $email= $invitado ['email'];
        $cellphone= (int)$invitado['telefono_inv'];
    }
    switch ($valor) {
        case "nombre":
            return $name;
        case "apellido":
           return $last_name;
        case "email" :
           return $email;
        case "celular" :
           return $cellphone;
        default:
           return "??";


    }

}





