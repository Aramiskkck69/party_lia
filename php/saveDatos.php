<?php
    require_once 'conexion_bd.php';
    require_once 'crud.php';
	$obj= new crud();

	$id = $_POST['id'];


//    for ($i = 1; $i<= $id;$i++){
//        $datos[$i] =array($_POST["nombre$i"],
//                          $_POST["apellido$i"],
//                          $_POST["email$i"],
//                          $_POST["numero$i"]);
//
//    }



//    for ($i = 1; $i<= $id;$i++){
//        $nombre[] = $_POST["nombre$i"];
//        $apellido[] = $_POST["apellido$i"];
//        $email[] = $_POST["email$i"];
//        $numero[] = $_POST["numero$i"];
//        $data=array($nombre,$apellido,$email, $numero);
//    }
//    for ($i = 0; $i<= ($id-1);$i++){
//    $data[$i] = array($nombre[$i],$apellido[$i],$email[$i],$numero[$i]);
//    }
//
// *************** ESTE GRUPO ************************************
        for ($i = 1; $i<= $id;$i++){
            $datos[$i] =array("nombre$i" => $_POST["nombre$i"],
                "apellido$i"=> $_POST["apellido$i"],
                "email$i" => $_POST["email$i"],
                "numero$i" => $_POST["numero$i"]);

        }

        //    for ($i = 1; $i<= ($id);$i++) {
        //        $sql[$i] = array('INSERT into t_juegos (nombre,apellido,email,numero)
        //                                        values ('.$datos[$i]["nombre$i"].','.
        //                                                    $datos[$i]["apellido$i"].','.
        //                                                    $datos[$i]["email$i"].','.
        //                                                    $datos[$i]["numero$i"].')');
        //    }
    for ($i = 1; $i<= ($id);$i++) {
        $sql[$i] = array( "consulta$i" =>'INSERT into t_juegos (nombre,apellido,email,numero)
                                        values ('.$datos[$i]["nombre$i"].','.
                                                    $datos[$i]["apellido$i"].','.
                                                    $datos[$i]["email$i"].','.
                                                    $datos[$i]["numero$i"].')');
    }

// *************************************************************************

//	$datos=array($nombre,$apellido,$email,$numero,$id);

	//var_dump($datos);
	//var_dump($data);
	var_dump($sql);


//var_dump($data);


//	echo $obj->agregar($datos);


 ?>


