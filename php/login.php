<?php
include_once "conexion_bd.php";

//$cell = $_SERVER["REQUEST_URI"];
//
//list($basura, $cell)= explode("?",$cell);

    $cell = $_SESSION['usuario_tel'] ;

$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE telefono = '$cell'");

while($usuario = mysqli_fetch_assoc($query)){ //Convierte en un array la consulta
    $NoInv = (int)$usuario ['NoInv'] ;
    $cell_bd = $usuario ['nombre'] ;
}
?>

<table class='table  table-striped table-dark'>
       <tr >
       <th scope='col'> No. Invitados </th>
       <th scope='col'> Nombre </th><th scope='col'> Apellido </th>
       <th scope='col'> Email </th>
       <th scope='col'> Edad </th>
       <th scope='col'> Telefono </th>
       </tr>

<?php
for ($i=1;$i <= $NoInv; $i++){
?>
    <tr>
                <td><?php echo $i ?> </td>
                <td>
                <input type='text' id='txtFName' placeholder='Nombre' autofocus />
                </td>

                <td>
                <input type='text' id='txtLName' placeholder='Apellido' />
                </td>

                <td>
                <input type='email' id='txtemail' placeholder='usuario@email.com' />
                </td>

                <td>
                <input type='number' id='txtage' placeholder='Edad' />
                </td>

                <td>
                <input type='text' id='txtnumber'  pattern= '[0-9]{10}'  placeholder='(lada) + numero' />
                </td>

    </tr>
    <?php }?>
</table>


