<?php

class crud{
//    public function agregar($datos){
//        $obj= new conectar();
//        $conexion=$obj->conexion();
//
//        $sql="INSERT into t_juegos (nombre,anio,empresa)
//									values ('$datos[0]',
//											'$datos[1]',
//											'$datos[2]')";
//        return mysqli_query($conexion,$sql);
//    }
    public function obtenDatos($idInv){

        $obj = new conectar();
        $conexion = $obj->conexion();
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
    public function actualizar($datos){
        $obj = new conectar();
        $conexion = $obj->conexion();


        $sql = "UPDATE invitados SET nombre ='$datos[0]' ,
                     apellido='$datos[1]',
                     email='$datos[2]',
                     telefono_inv ='$datos[3]' 
                 WHERE id= '$datos[4]'";

        return mysqli_query($conexion,$sql);

    }
}


