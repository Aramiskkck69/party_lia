<?php
require_once 'conexion_bd.php';
require_once 'crud.php';

$obj = new crud();
echo $_POST['idInv'] ;

echo json_encode($obj->obtenDatos($_POST['idInv']));





?>