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
  <link rel="stylesheet" href="wireframe.css">
</head>

<body>
  <div class="text-center py-3">
    <div class="container">
      <div class="row py-5">
        <div class="mx-auto col-lg-6">
          <h1>Escoge una asignatura</h1>
          <p class="mb-4">Y luego escoge a tu profesor favorito. ¡Con tranquilidad! Son de las mejores universidades de Colombia.</p>
          <div class="form-group"><select size="4" multiple="" class="form-control" name="cars">
              <option value="matematica">Matemática</option>
              <option value="quimica">Química</option>
              <option value="ingles">Inglés</option>
            </select></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"><a class="btn btn-outline-primary" href="#">¡Programa una clase ahora mismo!</a></div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
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
  <?php

$asignatura=$_REQUEST['asignatura'];

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

$sql = "SELECT id, nombre, asignatura, descripcion, precio, imagen FROM tutor where asignatura='$asignatura'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>
  <div class="py-3" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <div class="row border border-secondary rounded" style="	border-top-left-radius: 20px;	border-bottom-right-radius: 20px;	border-bottom-left-radius: 20px;	border-top-right-radius: 20px;">
            <div class="col-md-3 order-3 order-md-1"> <img style="height:254.5px; width:254.5px;" class="img-fluid d-block" src="img/<?= $record['imagen']?>"> </div>
            <div class="col-md-6 col-8 d-flex flex-column justify-content-center p-3 order-1 order-md-2">
              <h1>
                <?php echo $record['nombre'] ?>
              </h1>
              <h3>
                <?php echo $record['asignatura'] ?>
              </h3>
              <p class="lead">
                <?php echo $record['descripcion'] ?>
              </p>
            </div>
            <?php $id = $record['id'] ?>
            <div class="col-md-2 col-4 d-flex flex-column align-items-center justify-content-center order-2 order-md-2 p-3">
              <h3>Precio: $
                <?php echo $record['precio'] ?> c/h</h3>
              <form action="verificar.php"><button type="submit" name="id" value="<?php echo $id ?>" class="btn btn-primary mb-3" href="verificar.php">Ver perfil </button></form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>

</html>