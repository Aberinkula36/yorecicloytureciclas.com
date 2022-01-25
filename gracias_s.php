<?php
  
  session_start();
  //error_reporting(0);

  $varsesion = $_SESSION ['email'];

  if ($varsesion == null || $varsesion = ''){
    echo "Usted no tiene autorización";
    die();
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Yo Reciclo y Tú Reciclas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/proyecto.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>

  <body>
    <nav class="menu navbar navbar-expand-lg sticky-top bg-white">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-1" href="index_s.php" aria-label="Product">     
          <img src="img/logo.png" class="logo" alt="Logotipo de Yo Reciclo y Tú Reciclas">
        </a>

        <a class="py-2 d-none d-md-inline-block" href="quienes_s.php">¿Quiénes somos?</a>
        <a class="py-2 d-none d-md-inline-block" href="que_s.php">¿Qué hacemos?</a>
        <a class="py-2 d-none d-md-inline-block" href="colabora_s.php">Colabora</a>
        <a class="py-2 d-none d-md-inline-block" href="cerrar_sesion.php">Cerrar sesión</a>
      </div>
    </nav>

    <!-- Hamburguer Menu -->

    <p>
      <a class="btn mx-auto d-block d-sm-block d-md-none" data-toggle="collapse" href="#collapse0" role="button" aria-expanded="false" aria-controls="collapse0" style="width: 60px">
        <img src="img/Hamburger_icon.svg.png" width="30" height="30" alt="Menú de navegación para móviles o menú hamburguesa" class="mx-auto d-block">   </a>
    </p>
    <div class="collapse mx-auto" id="collapse0" style="width: 300px">
      <div class="card card-body">
        <a class="py-2 mx-auto" style="color: #ff5493" href="quienes_s.php">¿Quiénes somos?</a>
        <a class="py-2 mx-auto" style="color: #ff5493" href="que_s.php">¿Qué hacemos?</a>
        <a class="py-2 mx-auto" style="color: #ff5493" href="colabora_s.php">Colabora</a>
        <a class="py-2 mx-auto" style="color: #ff5493" href="cerrar_sesion.php">Cerrar sesión</a>
      </div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h3>Gracias por reservar una hora con <b>Yo Reciclo y Tú Reciclas.</b> Te hemos enviado un email con los datos de tu reserva, comprueba tu correo. Si no ves nada, comprueba tu bandeja se spam. </h3>
        <br>
      </div>
    </div>

    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <img src="img/logo.png" class="logofooter mx-auto" alt="Logotipo de Yo Reciclo y Tú Reciclas">
          <small class="d-block mb-3 text-center">&copy; 2020</small>
        </div>
        <div class="col-6 col-md">
          <h5>¿Quiénes somos?</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Fundación</a></li>
            <li><a class="text-muted" href="#">Equipo humano</a></li>
            <li><a class="text-muted" href="#">Equipo profesional</a></li>
            <li><a class="text-muted" href="#">Todo por el reciclaje</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>¿Por qué reciclamos?</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Medio ambiente</a></li>
            <li><a class="text-muted" href="#">Calentamiento global</a></li>
            <li><a class="text-muted" href="#">Presente y futuro</a></li>
            <li><a class="text-muted" href="#">Conciencia</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Colabora</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Hazte socio/a</a></li>
            <li><a class="text-muted" href="#">Recoge</a></li>
            <li><a class="text-muted" href="#">Siembra</a></li>
            <li><a class="text-muted" href="#">Participa</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Contáctanos</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Te escuchamos</a></li>
            <li><a class="text-muted" href="#">Localización</a></li>
            <li><a class="text-muted" href="#">Privacidad</a></li>
            <li><a class="text-muted" href="#">Términos de uso</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
