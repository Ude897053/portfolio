<?php
$pg = "contacto";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <title>contacto</title>
</head>

<body id="contacto" class="d-flex flex-column h-100">
  <header class="container">
  
  <?php include_once "menu.php"; ?>

 
  </header>
  <main class="container">
    <div class="row">
      <div class="col-12 pt-3 pb-4">
        <h1>contacto</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6">
        <p>Te invito a que te contactes enviando un menssaje o bien por whatsapp</p>
      </div>
      <div class="col-12 col-sm-6">
        <form action="" method="POST">
          <div class="pb-3">
            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow" >
          </div>
          <div class="pb-3">
            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
          </div>
          <div class="pb-3">
             <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/whatsapp" class="form-control">
          </div>
          <div class="pb-3">
            <textarea name="txtMensaje" id="txtMensaje" class="form-control" placeholder="Escribe aqui su Mensaje"></textarea>
          </div>
          <div class="">
            <button type="submit" name="btnEnviar" id="btnEnviar" class="btn">ENVIAR</button>
          </div>

        </form>

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
<a href="tecnico.alangarcia@hotmail.com">tecnico.alangarcia@hotmail.com</a>
      </div>
      
    </div>
  </footer>

</body>

</html>