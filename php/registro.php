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
        <th scope='col'> No. Invitados </th>
        <th scope='col'> Nombre </th><th scope='col'> Apellido </th>
        <th scope='col'> Email </th>
        <th scope='col'> Telefono </th>
        <th scope='col'> opciones </th>
    </tr>
    <?php
    while($invitado = mysqli_fetch_assoc($query1)){
        ?> <tr>
            <td><?php echo $invitado ['id']; ?> </td>
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
                <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdit">editar </button>
                <button class="btn btn-danger glyphicon glyphicon-remove" data-toggle="modal"> borrar </button>
            </td>
        </tr>
<?php   } ?>
 </table>
    <!-- Modal editar-->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


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
