<?php
require "php/conexion_bd.php";

$obj = new conectar();
$conexion = $obj->conexion();
session_start();
$cell = $_SESSION['usuario_tel'] ;

$sql = "SELECT * FROM usuarios WHERE telefono = '$cell'";
$query = mysqli_query($conexion, $sql);

while($usuario = mysqli_fetch_assoc($query)){ //Convierte en un array la consulta
    $nombre = $usuario['nombre'];
    $apellido = $usuario['apellido'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>invitacion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--    <link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.css">-->
    <link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

    <script src="librerias/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="librerias/datatable/jquery.dataTables.min.js"></script>
    <script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="librerias/alertify/alertify.js"></script>

    <!-- Estilos CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles/principal/styles.css" />

    <!-- Fond   -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
<header >

    <nav class="navbar navbar-expand-lg navbar-light "  id="menu_var">
        <span class="navbar-brand mb-0 h1" style="color: #FDEEF1">Lia Fernanda Bautizo</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Invitacion </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Detalles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mapa</a>
                </li>

            </ul>
        </div>
    </nav>
</header>


<section id="section1" class="container-fluid">
<!--Formulario-->
    <div class="container">
        <div class="row">
        <!--    imagen -->
            <div class="col-lg-6 col-sm-12 col-md-12 offset-lg-3" id="div_img">
                <h2>Hola <?php echo $nombre.' '.$apellido; ?> es un placer invitarte a este evento</h2>
                <img class="img-fluid" src="assets/image/oso.jpg" style="max-width: 100%; max-height: 100%">
            </div>
         </div>

    </div>
    <hr>
</section>
<section id="section_registro" class="container-fluid">
<!--Formulario-->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-sm-12 col-md-12  offset-lg-1">
                <?php

                include 'php/registro.php';
                $cell = $_SESSION['usuario_tel'] ;

                ?>
            </div>
        </div>

    </div>
</section>
<hr/>

<section id="section2" class="container-flex" >
<!-- Datos -->
    <div class="container">
        <div class="row columna">
            <div class="col-lg-4 col-md-4 col-sm-4 info" id="direccion">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="50" height="50"
                     viewBox="0 0 225 225"
                     style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"  font-size="none"><path d="M0,225.98959v-225.98959h225.98959v225.98959z" fill="none"></path><g fill="#b09499"><path d="M112.5,9c-32.25586,0 -58.5,26.24414 -58.5,58.5c0,42.85547 52.68164,112.30664 54.91406,115.24219l3.58594,4.6582l3.58594,-4.6582c2.23242,-2.93555 54.91406,-72.38672 54.91406,-115.24219c0,-32.25586 -26.24414,-58.5 -58.5,-58.5zM112.5,49.5c9.94922,0 18,8.05078 18,18c0,9.94922 -8.05078,18 -18,18c-9.94922,0 -18,-8.05078 -18,-18c0,-9.94922 8.05078,-18 18,-18zM32.83594,144l-25.73437,72h210.79688l-25.73437,-72h-34.43555c-1.75781,3.09375 -3.51562,6.09961 -5.27344,9h33.38086l19.26563,54h-185.20312l19.26563,-54h33.38086c-1.75781,-2.90039 -3.51562,-5.90625 -5.27344,-9z"></path></g></g></svg>
                <h3> Direccion </h3>
                <p>Mamá Rosa campestre</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 info">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="50" height="50"
                     viewBox="0 0 171 171"
                     style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-size="none"  style="mix-blend-mode: normal"><path d="M0,171.99654v-171.99654h171.99654v171.99654z" fill="none"></path><g fill="#b09499"><path d="M41.04,0c-3.74063,0 -6.84,3.09938 -6.84,6.84v6.84h-20.52c-1.38937,0 -2.91234,0.21375 -4.36852,1.22906c-1.45617,1.01531 -2.47148,3.03258 -2.47148,4.90289v137.655c0,1.71 0.58781,3.46008 1.81687,4.72922c1.2157,1.2825 3.00586,1.96383 4.74258,1.96383h144.20109c1.73672,0 3.52687,-0.68133 4.74258,-1.96383c1.22906,-1.26914 1.81688,-3.01922 1.81688,-4.72922v-137.655c0,-1.87031 -1.01531,-3.88758 -2.47148,-4.90289c-1.45617,-1.01531 -2.97914,-1.22906 -4.36852,-1.22906h-20.52v-6.84c0,-3.74062 -3.09938,-6.84 -6.84,-6.84h-6.84c-3.74063,0 -6.84,3.09938 -6.84,6.84v6.84h-61.56v-6.84c0,-3.74062 -3.09938,-6.84 -6.84,-6.84zM41.04,6.84h6.84v20.52h-6.84zM123.12,6.84h6.84v20.52h-6.84zM13.68,20.52h20.52v6.84c0,3.74063 3.09937,6.84 6.84,6.84h6.84c3.74063,0 6.84,-3.09938 6.84,-6.84v-6.84h61.56v6.84c0,3.74063 3.09937,6.84 6.84,6.84h6.84c3.74062,0 6.84,-3.09938 6.84,-6.84v-6.84h20.52v23.94h-143.64zM13.68,51.3h143.64v106.02h-143.64zM100.23539,79.24781c-2.24437,0 -4.24828,0.37406 -6.01172,1.12219c-1.76344,0.73477 -3.25969,1.76344 -4.47539,3.09937c-1.2157,1.33594 -2.1375,2.89898 -2.76539,4.68914c-0.62789,1.7768 -0.94852,3.7139 -0.94852,5.81133c0,2.21765 0.32063,4.2082 0.94852,5.99836c0.62789,1.79015 1.50961,3.29977 2.64515,4.55555c1.13555,1.25578 2.4982,2.23102 4.10133,2.9257c1.58977,0.69469 3.36656,1.04203 5.33039,1.04203c1.88367,0 3.60703,-0.4275 5.18344,-1.30922c1.56305,-0.89508 2.79211,-2.17758 3.70055,-3.8475l0.12023,0.12023c-0.12023,1.42945 -0.28055,3.00586 -0.4943,4.7025c-0.22711,1.69664 -0.62789,3.29977 -1.2157,4.80938c-0.58781,1.49625 -1.42945,2.73867 -2.51156,3.74062c-1.06875,1.01531 -2.51156,1.50961 -4.31508,1.50961c-1.76344,0 -3.17953,-0.53437 -4.2082,-1.61648c-1.04203,-1.09547 -1.6432,-2.52492 -1.80352,-4.28836h-6.7064c0.08015,1.76344 0.46758,3.36656 1.17562,4.80938c0.70805,1.42945 1.61648,2.65852 2.73867,3.68719c1.12219,1.02867 2.40469,1.81687 3.86086,2.40469c1.44281,0.57445 3.00586,0.855 4.64906,0.855c2.91235,0 5.34375,-0.68133 7.32094,-2.03063c1.99055,-1.3493 3.59367,-3.11273 4.80938,-5.2636c1.2157,-2.15086 2.08406,-4.54219 2.61844,-7.17398c0.53437,-2.61844 0.80156,-5.22352 0.80156,-7.81523c0,-3.11273 -0.22711,-6.0518 -0.65461,-8.80383c-0.4275,-2.75203 -1.18898,-5.13 -2.2711,-7.16063c-1.08211,-2.04398 -2.55164,-3.63375 -4.44867,-4.80937c-1.88367,-1.17563 -4.275,-1.76344 -7.17398,-1.76344zM66.43617,80.11617c-0.24047,1.30922 -0.73476,2.41805 -1.50961,3.32649c-0.76148,0.90844 -1.68328,1.6432 -2.76539,2.21765c-1.06875,0.57445 -2.28445,0.9886 -3.62039,1.22906c-1.33594,0.24047 -2.71195,0.37406 -4.12805,0.37406v5.54414h10.13977v30.40594h7.36102v-43.09735zM99.94148,85.11258c1.25578,0 2.35125,0.24047 3.29977,0.7214c0.93516,0.4943 1.71,1.14891 2.31117,1.95047c0.61453,0.80156 1.08211,1.73672 1.38938,2.79211c0.32063,1.06875 0.46758,2.17758 0.46758,3.32648c0,1.18899 -0.14695,2.33789 -0.46758,3.42c-0.30726,1.08211 -0.77484,2.05735 -1.38938,2.88562c-0.60117,0.84164 -1.37601,1.52297 -2.31117,2.01727c-0.94852,0.48094 -2.04398,0.73477 -3.29977,0.73477c-1.2157,0 -2.27109,-0.26719 -3.17953,-0.77485c-0.90844,-0.50765 -1.6432,-1.17562 -2.23102,-1.99055c-0.60117,-0.82828 -1.02867,-1.79015 -1.33594,-2.87227c-0.2939,-1.08211 -0.44086,-2.23101 -0.44086,-3.42c0,-1.1489 0.14695,-2.25773 0.44086,-3.32648c0.30727,-1.05539 0.73477,-2.0039 1.33594,-2.83219c0.58781,-0.81492 1.32258,-1.45617 2.23102,-1.92375c0.90844,-0.48094 1.96383,-0.70805 3.17953,-0.70805z"></path></g></g></svg>
                <h3> Fecha y Hora </h3>
                <p>Sábado 19 de Diciembre hora 1:30 p.m.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm- info" id="padrinos">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="50" height="50"
                     viewBox="0 0 171 171"
                     style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"  font-size="none" style="mix-blend-mode: normal"><path d="M0,171.99654v-171.99654h171.99654v171.99654z" fill="none"></path><g fill="#b09499"><path d="M23.94,13.68c-9.42894,0 -17.1,7.67106 -17.1,17.1v82.08c0,9.42894 7.67106,17.1 17.1,17.1h14.16094c1.15938,9.9009 -1.76232,16.61634 -9.0777,21.00762c-1.3167,0.79002 -1.94673,2.36664 -1.53633,3.8475c0.40698,1.48086 1.75409,2.50488 3.29309,2.50488c8.7552,0 29.77997,-2.7189 39.95789,-27.36h18.62965c-0.25992,-1.76472 -0.44754,-3.56914 -0.44754,-5.47066c0,-0.4617 0.04954,-0.91448 0.07348,-1.36934h-20.59348c-1.43298,0 -2.71703,0.89364 -3.21293,2.2377c-5.61222,15.30792 -15.87431,21.39365 -24.28066,23.73293c4.03902,-5.98158 5.21357,-13.73279 3.50015,-23.16516c-0.29754,-1.6245 -1.7147,-2.80547 -3.36656,-2.80547h-17.1c-5.65668,0 -10.26,-4.60332 -10.26,-10.26v-82.08c0,-5.65668 4.60332,-10.26 10.26,-10.26h123.12c5.65668,0 10.26,4.60332 10.26,10.26v66.24914c2.43504,0.74214 4.72302,1.81949 6.84,3.13277v-69.38191c0,-9.42894 -7.67106,-17.1 -17.1,-17.1zM117.99,102.6c-12.312,0 -22.23,9.91934 -22.23,21.88934c0,18.81 17.09733,30.09733 28.04133,37.27933c3.078,2.052 5.47734,3.42 7.18734,5.13l2.05067,1.71l2.05066,-1.71c1.71,-1.368 4.44466,-3.078 7.18066,-5.13c11.628,-7.524 28.72934,-18.46933 28.72934,-37.27933c0,-11.97 -9.918,-21.88934 -22.23,-21.88934c-5.814,0 -11.286,2.39667 -15.39,6.15867c-4.104,-3.762 -9.576,-6.15867 -15.39,-6.15867zM117.99,109.44c5.13,0 9.57333,2.394 12.65133,6.84l2.73867,4.10133l2.73867,-4.10133c2.736,-4.104 7.52133,-6.84 12.65133,-6.84c8.55,0 15.39,6.84134 15.39,15.04934c0,15.048 -14.36667,24.62133 -24.96867,31.46133c-2.394,1.368 -4.10133,2.73467 -5.81133,3.76067c-1.71,-1.368 -3.41733,-2.39267 -5.81133,-3.76067c-10.602,-6.84 -24.96867,-16.41333 -24.96867,-31.46133c0,-8.208 6.84,-15.04934 15.39,-15.04934z"></path></g></g></svg>
                <h3> Padrinos</h3>
                <p>Humberto Ayala & Esmeralda Ibarra </p>
            </div>
        </div>
    </div><hr/>
</section>
<section id="section3" class="container-flex">
    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <!--mapa -->
                <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.459887677005!2d-105.00089258574506!3d21.56796467452917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84274a91ed5b24a3%3A0x3c81d4abc50b41d0!2sMama%20Rosa.%22Campestre%22!5e0!3m2!1ses-419!2smx!4v1607990876124!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">

                    </iframe>
                </div
            </div>
        </div>
    </div>

</section>
<footer class="text-center footer-style" class="container-flex">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-12">
                <p> *Uso estricto de las medidas sanitarias (cubrebocas, gel antibacterial, sana distancia)</p>
            </div>
        </div>
    </div>


</footer>
<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="modalActualizar" >
            <div class="modal-body" style="display: block" >
                <input type="text"  id="id_edit" name="id_edit" class="form-control input-sm" hidden>
                <label>Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control input-sm">
                <label>Apellidos</label>
                <input type="text" name="apellido" id="apellido" class="form-control input-sm">
                <label>Emial</label>
                <input type="email" name="email" id="email" class="form-control input-sm">
                <label> Celular</label>
                <input type="text" name="celular" id="celular" class="form-control input-sm" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning text-white" data-dismiss="modal" id="btnActualiza">Actualizar</button>
            </div>
            </form>

        </div>
    </div>
</div>
<!--<div id="r">-->
<!--<strong> Hola</strong>-->
<!---->
<!--</div>-->


<script type="text/javascript" src="js/principal/main.js"></script>
<!--<script src="js/principal/main.js" type="text/javascript"></script>-->


<script type="text/javascript">
    function agregarFarmActualizar(idInv){

        $.ajax({
            type: "POST",
            data: "idInv=" + idInv,
            url: "php/obtenerDatos.php",
            success:function(r){
                while (r.charAt(0) != '{'){
                    r=r.substring(1);
                }
                console.log(r);
                datos = jQuery.parseJSON(r);
                $('#id_edit').val(datos['id']);
                $('#nombre').val(datos['nombre']);
                $('#apellido').val(datos['apellido']);
                $('#email').val(datos['email']);
                $('#celular').val(datos['telefono_inv']);
            },
            error:function(eror){

            }
        });
    }




</script>

<script type="text/javascript">
$(document).ready(function () {

        $('#btnActualiza').click(function (e) {
            e.preventDefault();
            datos = $('#modalActualizar').serialize();
           // console.log(datos);

            $.ajax({
                type: "POST",
                data: datos,
                url: "php/actualizarDatos.php",
                success: function (r) {
                    alertify.success("agregado con exito :D");
                    $('#tabla_general').load('php/registro.php');
                },error: function() {
                    console.log("Signup was unsuccessful");
                    alertify.error("Fallo al actualizar :(");
                }


            });
        });

    $('#btnAgregarnuevo').click(function(e){
        e.preventDefault();
        datos = $(".saveDatos").serialize();

        console.log(datos);
        $.ajax({
            type:"POST",
            data:datos,
            url:"php/saveDatos.php",
            success:function(r){
                 // $('#r').html(r);
                //
                //console.log(r);
                // if(r==1){
                //     $('#frmnuevo')[0].reset();
            alertify.success("agregado con exito :D");
            $('#tabla_general').load('php/registro.php');
                // }else{
                //     alertify.error("Fallo al agregar :(");
                // }
            },
            error:function (error){
                console.log("Este es el error"+ error)
            }
        });
    });

    // $('#tabla_datos').on('click', '.enviar', function(e) {
    //
    //     e.preventDefault(); // cancela el evento por defecto ***MUY IMPORTANTE PARA EL FUNCIONAMIENTO**
    //
    //     var filaactual = $(this).closest("tr"); // obtiene la fila actual
    //
    //     var cita = filaactual.find("td:eq(0)").text(); // obtiene el valor del primer TD de la fila actual
    //
    //     var atendido = $("#atendido").val();
    //
    //
    //     var parametros = {
    //         cita: cita,
    //         atendido: atendido
    //     };
    //
    //     $.ajax({
    //         type:  'POST', //método de envio
    //         data:  parametros, //datos que se envian a traves de ajax
    //         url:   'modelo_tabla.php', //archivo que recibe la peticion
    //         success:  function (response) {
    //             location.href='citas.php';
    //         }
    //     });
    // });


});
</script>



</body>
</html>