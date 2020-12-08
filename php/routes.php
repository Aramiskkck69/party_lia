<?php

session_start();

if(isset($_POST)){
    $name = trim($_POST["userName"]);
    $cell = trim($_POST["userCell"]);
}
$conexion = mysqli_connect("localhost", 'root',"","party");

$sql= "SELECT * FROM usuarios WHERE telefono = '$cell'" ;

// Consulta SELECT
    $query = mysqli_query($conexion, $sql);

//SELECT * FROM usuarios WHERE telefono = '$cell'

    if ($query && mysqli_num_rows($query) == 1){
        $_SESSION['usuario_tel'] = $cell;
        header("Location: ../index.php?cell=$cell");
    }
    else{
        header("Location: ../sorry.php");
    }

?>





