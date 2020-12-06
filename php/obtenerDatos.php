<?php
require_once 'conexion_bd.php';

 function obtenDatos($idInv){

    $sql = "SELECT id,nombre,apellido,email,telefono_inv FROM invitados WHERE id = '$idInv'";
    $result= mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($result);

    $datos = array(
        'id' =>$ver[0] ,
        'nombre' =>$ver[1],
        'apellido' =>$ver[2],
        'email' =>$ver[3],
        'telefono_inv'=>$ver[4]
    );
    return $datos;
}
$obj = (object) array('id','nombre','apellido','email','telefono_inv');


echo json_encode($obj->obtenDatos($_POST['idInv']));





?>