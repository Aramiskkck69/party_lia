<?php

class crud{
    public function agregar($datos){
        $obj = new conectar();
        $conexion = $obj->conexion();

        $sql = "INSERT INTO invitados (id,nombre,apellido,email,telefono_inv) values 
                ('$datos[0]',
                '$datos[1]',
                '$datos[2]',
                '$datos[3]',
                '$datos[4]')";

    return mysqli_query($conexion,$sql);
}
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

}


