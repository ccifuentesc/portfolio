<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="inicio">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>

    <main class="container">
      <div class="row">
        <div class="col-12 mx-auto text-center cohete">
          <div>
            <a href="proyectos.html"><img src="images/cohete.svg" alt=""></a>
          </div>
        </div>
        <div class="col-12 col-sm-6 offset-sm-3 text-center pt-4">
          <div class="my-4">
            <p class="px-5 my-2">Bienvenidos a mi sitio web sobre desarrollo de sistemas</p>
          </div>
        </div>
        <div class="col-12 text-center">
          <a href="proyectos.html" class="btn my-3 shadow">Conoce mis proyectos</a>
        </div>
      </div>
    </main>

    <footer class="container mt-auto py-4">

      <div class="btn-whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
      </div>
  
      <div class="row">
        <div class="col-3">
          <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
          <a href="" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
  
        <div class="col-3">
          Sponsor: <a href="https://depcsuite.com">DePC Suite</a>
        </div>
  
        <div class="col-3">
          <a href="mailto:cavaliercifuentes@gmail.com">cavaliercifuentes@gmail.com</a>
        </div>
      </div>
    </footer>
</body>
</html>