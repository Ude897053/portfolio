<?php
$pg = "sobre-mi";
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
  <title>sobre mi</title>
</head>

<body id="sobre-mi">
  <header class="container">
  <?php include_once "menu.php"; ?>

  </header>
  <section>
    <main class="container" id="descripcion">
      <div class="row">
        <div class="col-12 col-sm-7">
          <h1 class="pb-5 pt-3">Sobre Mi</h1>
          <p class="pb-5">Apasionado por la tecnología Web. Soy Programador full stack.</p>
          <div class="btn btn-rojo">enviar mensaje</div>
        </div>
        <div class="col-12 col-sm-5">
          <img src="images/sobre-mi.jpg" alt="Mi foto" class="mi-foto">
        </div>
      </div>
  </section>
  <section id="stack-tecnologico">
    <div class="container">
      <div class="row">
        <div class="col-12 py-5">
          <h2 class="text-white">Stack Tecnologico</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>Javascript</h3>
            <img src="images/javascript.jpeg" alt="javascript">
          </div>
        </div>
        <div class="col-6 col-sm-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>php</h3>
            <img src="images/php.jpg" alt="php">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>Html 5</h3>
            <img src="images/html5.png" alt="html 5">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>reajt</h3>
            <img src="images/reajt.png" alt="reajt">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>j query</h3>
            <img src="images/jquery.jpg" alt="jquery">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>bootstrap</h3>
            <img src="images/bootstrap.png" alt="bootstrap">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>laravel</h3>
            <img src="images/laravel.png" alt="laravel">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>mySQL</h3>
            <img src="images/mysq.png" alt="mySQL">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>css</h3>
            <img src="images/css.png" alt="css">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>git</h3>
            <img src="images/git.png" alt="git">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>apache</h3>
            <img src="images/apache.png" alt="apache">
          </div>
        </div>
        <div class="col-2 text-center">
          <div class="tecnologia mb-4 pt-5">
            <h3>mercado pago</h3>
            <img src="images/mercado-pago.jpg" alt="mercado pago">
          </div>
        </div>



  </section>
  <section id="experiencia">
    <div class="container">
      <div class="row">
        <div class="col-12 py-5">
          <h2><i class="fa-solid fa-briefcase"></i>Experiencia Laboral</h2>
        </div>
      </div>
      <div class="row shadow">
        <div class="col-2 d-none d-sm-block p-5">
          <img src="images/logo-depcsuite.svg" alt="depc" class="img-fluid baw gris">
        </div>
        <div class="col-sm-10 mt-4">
          <h3>director founder</h3>
          <h4>de pc suite</h4>
          <h5>2016 al presente</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis reprehenderit itaque voluptas neque
            incidunt, sapiente libero minima quisquam pariatur accusamus nulla consequuntur corporis veritatis dolorum
            sequi voluptatum commodi quaerat fugiat?</p>
        </div>
      </div>
      <div class="row shadow">
        <div class="col-2 d-none d-sm-block p-5">
          <img src="images/uba.jpg" alt="uba" class="img-fluid gris">
        </div>
        <div class="col-sm-10 mt-4">
          <h3>desarrollador senior full stack</h3>
          <h4>universidad de buenos aires</h4>
          <h5>ago 2015 - ene 2020</h5>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique at ratione optio qui, vitae
            necessitatibus. Maiores quas omnis ipsum doloribus tempore aperiam temporibus placeat, veniam eligendi, rem,
            perferendis necessitatibus dolor.</p>
        </div>
      </div>
    </div>
    </div>

  </section>
  <section id="formacion-academica">
    <div class="container">
      <div class="row">
        <div class="col-12 py-5">
          <h2><i class="fas fa-graduation-cap"></i>Formacion Academica</h2>
        </div>
        <div class="row shadow">
      <div class="col-sm-2 d-none d-sm-block p-5">
        <img src="images/depc.jpg" alt="depcsuite" class="img-fluid">
      </div>
      <div class="col-sm-10 mt-4">
        <h3>Desarrollador Full stack</h3>
        <h4>DePcSuite</h4>
        <h5>2022-22</h5>
        <a href="https://depcsuite.com">DePcSuite</a>
      </div>
    </div>

    </div>

  </section>
  <section id="cursos">
    <div class="container">
      <div class="row">
        <div class="col-12 py-5">
          <h2><i class="fas fa-graduation-cap"></i>Cursos</h2>
        </div>
        <div class="row shadow">
          <div class="col-sm-2 d-none d-sm-block p-5">
            <img src="images/foto iap.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-sm-10 mt-4">
            <h3>Tecnico de Pc</h3>
            <h4>Iap (instituto argentino de profesionales)</h4>
            <h5>2014-2015</h5>
          </div>
        </div>
      </div>
    </div>
  </section>


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