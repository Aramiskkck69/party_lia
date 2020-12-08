<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$cel = $_POST['numero'];
$id = $_POST['id'];



$datos = array($nombre,$apellido,$email,$cel,$id);

var_dump($datos);


?>