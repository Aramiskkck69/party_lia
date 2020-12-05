<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>invitacion</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles/principal/styles.css" />
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Scroll   -->
    <script src="js/bootstrap/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fond   -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

            </ul>
        </div>
    </nav>
</header>

<section id="section0" >
<!--    imagen -->
<div class="container">
    <div class="row">
        <div class="col img" style="border: 1px red solid">
            <img src="assets/image/oso.jpg">
        </div>
    </div>
</div>
</section>
<section id="section1">
<!--Formulario-->
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" ">
                    <div id="AddControll">
                        <?php
                            include 'php/registro.php';
                        ?>
                    </div>
                 </form>
        </div>
    </div>
</section>
<section id="section2">
<!-- Datos -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aut deleniti enim eveniet iste
                    mollitia reiciendis? Dolores placeat, provident?</p>
            </div>
            <div class="col-lg-4 col-md-4 col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aut deleniti enim eveniet iste
                    mollitia reiciendis? Dolores placeat, provident?</p>
            </div>
            <div class="col-lg-4 col-md-4 col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aut deleniti enim eveniet iste
                    mollitia reiciendis? Dolores placeat, provident?</p>
            </div>
        </div>
    </div>
</section>
<section id="section3">
<!--mapa -->
    <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57654.32138048381!2d-100.98195314648616!3d25.425051647490754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86880d9078df19ef%3A0xa9519241794730c0!2sSaltillo%2C%20Coah.!5e0!3m2!1ses-419!2smx!4v1605560902344!5m2!1ses-419!2smx" frameborder="0"
                style="border:0" allowfullscreen></iframe>
    </div>
</section>
<footer class="text-center footer-style">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, error maiores officia praesentium
                    quasi qui.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap/bootstrap.min.js" ></script>
<!--<script src="js/principal/main.js" type="text/javascript"></script>-->
</body>
</html>