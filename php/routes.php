<?php

session_start();

if(isset($_POST)){
    $name = trim($_POST["userName"]);
    $cell = trim($_POST["userCell"]);
}
$conexion = mysqli_connect("localhost", 'root',"","party");



// Consulta SELECT
    $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE telefono = '$cell'");

//SELECT * FROM usuarios WHERE telefono = '$cell'

    if ($query && mysqli_num_rows($query) == 1){
        $_SESSION['usuario_tel'] = $cell;
        header("Location: ../index.php");
    }
    else{
        header("Location: ../sorry.php");
    }

?>





