<?php
$pg = "proyectos";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <title>proyectos</title>
</head>

<body id="proyectos">
  <header class="container">
  <?php include_once "menu.php"; ?>

  </header>
  <main class="container">
    <div class="row">
      <div class="col-12 pt-3 pb-4">
        <h1>Proyectos</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div>
          <p>Los Siguientes son algunos de los trabajos que he realizado:</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-4 p-4">
        <div class="row border proyecto pb-5">
          <div class="col-12 p-0">
            <img src="images/abmclientes.png" alt="AMBCIENTES" class="img-fluid">
            <h2>AMB CLIENTES</h2>
            <P class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</P>
          </div>
          <div class="col-6">
            <a href="" class="btn-rojo">Ver Online</a>
          </div>
          <div class="col-6">
            <a href="" class="link-rojo">Codigo Fuente</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-4 p-4">
        <div class="row border proyecto pb-5">
          <div class="col-12 p-0">
            <img src="images/abmventas.png" alt="AMBVENTAS" class="img-fluid">
            <h2>sistema gestion de ventas</h2>
            <p class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js,
              Ajax, jQuery y MySQL de base de datos.
            </p>
          </div>
          <div class="col-6">
            <a href="" class="btn-rojo">Ver Online</a>
          </div>
          <div class="col-6">
            <a href="" class="link-rojo">Codigo Fuente</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-4 proyecto p-4">
        <div class="row border proyecto pb-5">
          <div class="col-12 p-0">
            <img src="images/proyecto-integrador.png" alt="PROYECTO INTEGRADOR" class="img-fluid">
            <h2>PROYECTO INTEGRADOR</h2>
            <p clas="py-2 px-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con
              panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
          </div>
          <div class="col-6">
            <a href="" class="btn-rojo">Ver Online</a>
          </div>
        <div class="col-6">
        <a href="" class="link-rojo"> Codigo Fuente</a>
      </div>
      </div>

    </div>

  </main>
  <footer class="container mt-auto pb-4">
    <div class="btn-whatsapp">
      <a href="https://api.whatsapp.com/send?phone=541155957785" target="_blank"
        title="Enviar mensaje directo Whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
    </div>
    <div class="row">
      <div class="col-3">
        <a href="" target="_blank" title="github"> <i class="fa-brands fa-github"></i></a>
        <a href="" title="likedin" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
      </div>
      <div class="col-3">
        Sponsor <a href="https://depcsuite.com" target="_blank">DePc Suite</a>
      </div>
      <div class="col-3">
        <a href="tecnico.alangarcia@hotmail.com">tecnico.alangarcia@hotmail.com</a>
      </div>

    </div>
  </footer>
</body>

</html>