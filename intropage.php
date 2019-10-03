<?php
session_start();
if(!isset($_SESSION["session_username"])) {
header("location:login.php");
} else {
?>

<?php include("includes/header.php"); ?>
<div id="welcome">
<h2>Bienvenido, <span><?php echo $_SESSION[‘session_username’];?>! </span></h2>
<p><a href="logout.php">Finalice</a> sesión aquí!</p>
</div>

<?php
}
?>


<!DOCTYPE html>
<html>

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146660813-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146660813-1');
</script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar18">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar18"> <a class="navbar-brand d-none d-md-block" href="#">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b> Come Learning</b>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Quienes Somos</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Regístrate</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Contactanos</a> </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="#">Iniciar Sesión</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center" style="background-image: url('https://static.pingendo.com/cover-bubble-dark.svg');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-3">¡Registro satisfactorio!</h3>
          <p class="mb-3 lead">Dentro de poco podrás empezar a recibir clases online con los tutores de las mejores universidades del país.</p>
          <a class="btn btn-outline-primary" href="programaclase.php">¡Programa una clase ahora mismo!</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center"> <i class="fas fa-graduation-cap fa
fa-5x"></i>
          <p>Come Learning_</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 d-flex align-items-center justify-content-center my-3"> <a href="#">
            <i class="d-block fa fa-facebook-official text-muted fa-lg mr-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-google-plus-official text-muted fa-lg mx-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-pinterest-p text-muted fa-lg mx-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-reddit text-muted fa-lg mx-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
          </a> </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© Come Learning. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>