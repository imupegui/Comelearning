<?php 
$id = $_REQUEST['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comelearning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT nombre FROM tutor where id =$id";
$resultset = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));

while($datos = mysqli_fetch_array($resultset)){
  $nombre = $datos['nombre'];
}

$dia = $_REQUEST['dia'];
$hora = $_REQUEST['hora'];
$mensaje='Hola, me gustaría recibir una clase con el tutor ' . $nombre . ' el día ' . $dia . ' a las ' . $hora . " horas. " . $id;
$texto = urlencode($mensaje);
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-146660813-1"></script>
  <script> window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146660813-1');
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <link rel="stylesheet" href="wireframe.css">
</head>

<body>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-146660813-1"></script>
  <script> window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146660813-1');
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css" style="">
  <div class="py-5 text-center" style="	background-image: url(img/bg3.jpg);	background-size: cover;	background-position: top left;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="bg-white p-5 col-md-8 col-10 mx-auto my-5">
          <h3 class="display-3">¡Ya casi estás!</h3>
          <p class="mb-3 lead">Presiona el botón de abajo para ponernos en contacto</p>
          <a class="btn btn-outline-primary" href="https://wa.me/573145470138?text=<?= $texto?>">¡Programa la clase!</a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-light bg-primary">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-6 text-light">
          <h2 class="mb-4">¡Contáctanos!&nbsp;A través de Whatsapp:</h2>
          <p class="bg-light text-dark rounded px-1"> <a href="#" class="text-dark">
              <i class="fa d-inline mr-3 text-muted fa-phone"></i>+</a>57 3013351886</p>
          <p class="bg-light text-dark px-1 rounded"> <a href="#" class="text-dark">
              <i class="fa d-inline mr-3 text-muted fa-envelope-o"></i>info@comelearning.com</a> </p>
          <p style="" class="bg-light text-dark rounded px-1"> <a href="#" class="text-dark">
              <i class="fa d-inline mr-3 fa-map-marker text-muted"></i>C</a>artago, Valle del cauca.</p>
        </div>
        <div class="p-4 col-md-6">
          <h2 class="mb-4">Unéte al mundo del conocimiento.</h2>
          <form>
            <fieldset class="form-group"> <label for="exampleInputEmail1">Ingresa tu email.</label> <input type="email" class="form-control" placeholder="Ingresar email"> </fieldset> <button type="submit" class="btn btn-outline-light">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 bg-light" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 d-flex align-items-center justify-content-center text-light my-1"> <a href="#">
            <i class="d-block fa fa-facebook-official text-muted fa-lg mr-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-google-plus-official text-muted fa-lg mx-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-pinterest-p text-muted fa-lg mx-2"></i>
          </a> <a href="#" class="text-light">
            <i class="d-block fa fa-reddit text-muted fa-lg mx-2"></i>
          </a> <a href="#">
            <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
          </a> </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© 2018-2019 Come Learning.<br></p>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="container"> <a class="navbar-brand" href="#">
        <b> Come Learning<br></b></a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="#">¿Quienes somos?</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Contactanos</a> </li>
          <li class="nav-item" style=""> <a class="nav-link" href="#">Iniciar sesión</a> </li>
        </ul> <a class="btn navbar-btn ml-md-2 btn-light text-dark">Regístrate</a>
      </div>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>