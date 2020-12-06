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
$invitados = "SELECT * FROM invitados WHERE telefono_us = '$cell' ";

$query1 = mysqli_query($conexion, $invitados);

if(mysqli_num_rows($query1) == $NoInv){?>

<table class='table  table-striped table-dark'>
    <tr >
        <th scope='col'> Nombre </th><th scope='col'> Apellido </th>
        <th scope='col'> Email </th>
        <th scope='col'> Telefono </th>
        <th scope='col'> opciones </th>
    </tr>
    <?php
    while($invitado = mysqli_fetch_assoc($query1)){
        ?> <tr>

            <td>
                <?php echo $invitado ['nombre']; ?>
            </td>

            <td>
                <?php echo $invitado ['apellido'] ?>
            </td>

            <td>
                <?php  echo $invitado ['email'] ?>
            </td>

            <td>
                <?php  echo $invitado ['telefono_inv'] ?>
            </td>

            <td style="display: inline-grid">
                <button type="button" class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#ModalEdit" id="editButton" onclick="agregarFarmActualizar('<?php echo $invitado['id'];  ?>')">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>

                </button>
                <button type="button" class="btn btn-danger glyphicon glyphicon-remove" >
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </td>
        </tr>
<?php   } ?>
 </table>


<?php }else{ ?>

<table class='table  table-striped table-dark'>
       <tr >
       <th scope='col'> No. Invitados </th>
       <th scope='col'> Nombre </th><th scope='col'> Apellido </th>
       <th scope='col'> Email </th>
       <th scope='col'> Telefono </th>
       </tr>

<?php for ($i=1;$i <= $NoInv; $i++){?>
    <tr>
                <td><?php echo $i ?> </td>
                <td>
                <input type='text' id='txtFName' placeholder='Nombre' autofocus />
                </td>

                <td>
                <input name="apellido" type='text' id='txtLName' placeholder='Apellido' />
                </td>

                <td>
                <input name="email" type='email' id='txtemail' placeholder='usuario@email.com' />
                </td>

                <td>
                <input name="numero" type='text' id='txtnumber'  pattern= '[0-9]{10}'  placeholder='(lada) + numero' />
                </td>

    </tr>
    <?php }?>
</table>
    <div>
        <div >
            <button ><a href="php/save.php"> guardar </a></button>
        </div>
    </div>
<?php }?>
