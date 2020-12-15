<?php
require_once 'conexion_bd.php';
session_start();
$cell = $_SESSION['usuario_tel'] ;


$obj = new conectar();
$conexion = $obj->conexion();

$sql = "SELECT * FROM usuarios WHERE telefono = '$cell'";
$query = mysqli_query($conexion, $sql);

while($usuario = mysqli_fetch_assoc($query)){ //Convierte en un array la consulta
   $nombre = $usuario['nombre'];
   $appellido = $usuario['appellido'];

}

echo $nombre.' '.$appellido;
?>