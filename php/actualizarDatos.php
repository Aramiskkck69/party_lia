<?php
require_once 'conexion_bd.php';
require_once 'crud.php';
$obj = new crud();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$cel = $_POST['celular'];
$id = $_POST['id_edit'];



$datos = array($nombre,$apellido,$email,$cel,$id);

//var_dump($datos);

echo $obj->actualizar($datos);

?>
