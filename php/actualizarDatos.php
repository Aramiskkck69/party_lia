<?php

//$datos = array(
//    $_POST['nombre'],
//    $_POST['apellido'],
//    $_POST['email'],
//    $_POST['telefono_inv'],
//    $_POST['id_edit']
//);
//
//echo var_dump($datos);

require_once 'conexion_bd.php';
require_once 'crud.php';
$obj = new crud();


$datos = array(
    $_POST['nombre'],
    $_POST['apellido'],
    $_POST['email'],
    $_POST['telefono_inv'],
    $_POST['id_edit']
);


echo $obj->actualizar($datos);

?>
