<?php
 $pg = "inicio";
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
    <link rel="shortcut icon" href="images/AG.png" />
    <title>Inicio</title>
</head>
<body id="inicio">
    <header class="container">
      <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
      <div class="row estela">
          <div class="col-12 mt-3 text-center div-cohete">
              <a href="proyectos.html"><img src="images/cohete.svg" class="cohete"></a>
          </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3 web">
          <p> Bienvenidos a mi sitio Web. Sobre desarrollo de Sistemas</p>
        </div>
        <div class="row">
          <div class="col-12 text-center p-2 web-1 mb-3">
            <a href="proyectos.php" class="btn shadow">conoce mis proyectos</a>
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
          Sponsor <a href="https://depcsuite.com" target="_blank" >DePc Suite</a>
        </div>
        <div class="col-3">
  <a href="https://tecnico.alangarcia@hotmail.com">tecnico.alangarcia@hotmail.com</a>
        </div>
        
      </div>
    </footer>
    
</body>
</html>