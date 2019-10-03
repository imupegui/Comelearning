<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>Landing</title>
  <meta name="description" content="Wireframe design of a landing page by Pingendo">
  <meta name="keywords" content="Pingendo bootstrap example template wireframe landing">
  <meta name="author" content="Pingendo">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="wireframe.css">
</head>

<body class="">
  <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <div class="container"> <a class="navbar-brand" href="#">
        <b> Come Learning<br></b></a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="#">¿Quienes somos?</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#contacto">Contactanos</a> </li>
          <li class="nav-item" style=""> <a class="nav-link" href="login.php">Iniciar sesión</a> </li>
        </ul> <a class="btn navbar-btn ml-md-2 btn-light text-dark">Regístrate</a>
      </div>
    </div>
  </nav>
  <div class="bg-light py-4" id="register" style="	background-position: center center;	background-size: cover;	background-repeat: no-repeat;	background-image: url(img/bg1.jpg);">
    <div class="container mt-5">
      <div class="row">
        <div class="p-5 col-md-7 d-flex flex-column justify-content-end mt-5" style="">
          <h1 style="	background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;" class="text-light mt-5 px-2 rounded">¡Confiamos en que los estudiantes tienen el poder de transformar el mundo!</h1>
        </div>
        <div id="register" class="col-md-5 text-body py-3 rounded" style="	background-position: top left;	background-size: 100%;	background-repeat: repeat;	border-radius: 10px;	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));">
          <h3 class="mb-3 text-center rounded text-light py-1 bg-secondary">¡Registrate ahora!</h3>
          <div class="form-group text-light border border-light rounded py-1 px-2"> <label>Nombre</label> <input class="form-control" placeholder="Nombre"> </div>
          <div class="form-group text-light border border-light rounded py-1 px-2"> <label>Telefono</label> <input type="text" class="form-control" placeholder="Telefono"> </div>
          <div class="form-group text-light border border-light rounded py-1 px-2"> <label>Correo Electrónico</label><input type="text" class="form-control" style="" placeholder="Correo"> </div> <form action="registroestudiante.php"> <button class="btn mt-4 btn-block p-2 text-light btn-secondary"><b style="	background-position: top left;	background-size: 100%;	background-repeat: repeat;"><a class="text-light">Quiero ser estudiante</a></b></button></form><form action="registrotutor.php"><button href="registrotutor.php" type="submit" class="btn mt-4 btn-block p-2 text-dark btn-secondary"><b style="background-position: left top; background-size: 100%; background-repeat: repeat;"><a href="registrotutor.php" class="text-light">Quiero ser tutor</a></b></button></form>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-primary" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-3 border-right border-light p-4" style="">
          <h4 class="text-center" style=""><b class="text-left">Te registras</b></h4><i class="fa fa-check-square fa-5x fa-fw px-5"></i>
        </div>
        <div class="border-right border-light p-4 col-lg-3">
          <h4 class="text-center"><b class="text-left">Eliges tu materia</b></h4><i class="fa fa-fw fa-book fa-5x px-5"></i>
        </div>
        <div class="p-4 col-md-3 col-lg-3 border-right border-light">
          <h4 class="text-center"><b class="text-left">Escoges a tu tutor</b></h4><i class="fa fa-fw fa-5x px-5 fa-users"></i>
        </div>
        <div class="col-lg-3 p-4">
          <h4 class="text-center"><b class="text-left">Recibes tu clase</b></h4><i class="fa fa-fw fa-5x px-5 fa-graduation-cap"></i><i class="fa fa-fw fa-5x px-5"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="my-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center">Nuestros tutores&nbsp;</h2>
          <div class="row">
          <?php
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
$sql = "SELECT * FROM tutor order by rand() limit 3 ";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>
<div class="col-md-4 border-right border-dark">
              <div class="card"> <img class="card-img-top" style="height:348px;width:348px;" src="img/<?= $record['imagen']?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title font-weight-bold" contenteditable="true"><?= $record['nombre']?></h4>
                  <p class="card-text">Materia: <?= $record['asignatura']?><br><?= $record['descripcion']?></p> <a href="#" class="btn btn-primary mx-5 text-center" contenteditable="false">Programar clase</a>
                </div>
              </div>
            </div>
<?php } ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="pricing py-5" id="pagos">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="text-center mb-4 ">Formas de pago</h2>
</div>
</div>
<div class="row">

<div class="col-lg-4">
<div class="card mb-5 mb-lg-0">
<div class="card-body">
<h5 class="card-title text-muted text-uppercase text-center">Nequi</h5>
<h6 class="card-price text-center">$39<span class="period"> mil pesos</span></h6>
<hr>
<ul class="fa-ul">
<li><span class="fa-li"><i class="fas fa-check"></i></span>Pago a través de aplicación</li>
</ul>
<a class="btn btn-block btn-danger text-uppercase" data-toggle="collapse" href="#collapseNequi" role="button" aria-expanded="false" aria-controls="collapseNequi">Pagar con Nequi</a>
<div class="collapse" id="collapseNequi">
<div class="card card-body text-muted">
<p>Sigue los pasos para pagar con Nequi</p>
<ul>
<li>Descarga e instala la aplicación en Nequi en tu celular. <a href="http://onelink.to/89sgqy" target="_blank" class="text-danger">Oprime aquí para descargar</a></li>
<li>Crea una cuenta con tu número de celular.</li>
<li>Ingresa a la app y recarga</li>
<li>Selecciona la opción <b>Envía plata</b>.</li>
<li>En número celular ingresa el número <b>3148626878</b>.</li>
<li>En cantidad <b>el precio de tu clase</b>.</li>
<li>En mensaje escribe tu nombre completo, asignatura y tutor.</li>
<li>Oprime en <b>Continúa</b>.</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-4">
<div class="card mb-5 mb-lg-0">
<div class="card-body">
<h5 class="card-title text-muted text-uppercase text-center">Efectivo + Domicilio</h5>
<h6 class="card-price text-center">$44<span class="period"> mil pesos</span></h6>
<hr>
<ul class="fa-ul">
<li><span class="fa-li"><i class="fas fa-check"></i></span>Un asistente</li>
<li><span class="fa-li"><i class="fas fa-check"></i></span>Recogemos el dinero en la puerta de tu casa</li>
<li><span class="fa-li"><i class="fas fa-check"></i></span>Servicio de asistencia de pago</li>
<li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Disposición de cupo hasta garantizar desembolso</li>
</ul>
<a href="http://bit.ly/2kTLnCP" class="btn btn-block btn-primary text-uppercase" target="_blank"><i class="fab fa-whatsapp"></i> Inicia conversación</a>
</div>
</div>
</div>

<div class="col-lg-4">
<div class="card mb-5 mb-lg-0">
<div class="card-body">
<h5 class="card-title text-muted text-uppercase text-center">Corresponsal Bancolombia</h5>
<h6 class="card-price text-center">$39<span class="period"> mil pesos</span></h6>
<hr>
<ul class="fa-ul">
<li><span class="fa-li"><i class="fas fa-check"></i></span>Un asistente</li>
<li><span class="fa-li"><i class="fas fa-check"></i></span>Pago a través de sucursal Bancolombia</li>
<li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Disposición de cupo hasta garantizar desembolso</li>
</ul>
<a class="btn btn-block btn-danger text-uppercase" data-toggle="collapse" href="#collapseBancolombia" role="button" aria-expanded="false" aria-controls="collapseBancolombia">Pagar con Bancolombia</a>
<div class="collapse" id="collapseBancolombia">
<div class="card card-body text-muted">
<p>Sigue los pasos para pagar en un corresponsal Bancolombia</p>
<ul>
<li>Indicale al encargado que quieres recargar enviar dinero al telefono <b>3148626878</b></li>
<li>En caso de que te pregunten por el número de convenio es: <b>63703</b></li>
<li>Si te preguntan por el tipo de pago: Es un recaudo manual o pago de factura y ellos entender.</li>
<li>Entrega los <b>el precio de tu clase</b></li>
<li>Guarda y toma foto del comprobante.</li>
<li>Envíanos la foto de tu comprobante por whatsapp para confirmar tu clase.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>  
<div class="py-5 bg-primary" style="background-attachment: fixed;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center text-light pb-4">Confian en nosotros</h1>
        </div>
      </div>
      <div class="row">
        <div class="ml-auto p-3 col-md-2 bg-white"> <img class="img-fluid d-block rounded-circle" src="img/test1.jpg"> </div>
        <div class="p-3 col-md-7 mr-auto bg-white text-dark">
          <div class="blockquote mb-0">
            <p class="text-body">Realmente me gustó mucho ya que el profesor explica de una forma muy detallada y fácil de comprender</p>
            <div class="blockquote-footer"> <b>Mariana Sierra</b>, Primera cliente</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-2 bg-secondary" style="">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-8 col-md-12
col-lg-12">
          <h1>¿Qué esperas? ¡Regístrate!</h1>
          <p class="mb-4 lead">Y empieza a explorar el maravilloso mundo del conocimiento</p>
          <form class="form-inline d-flex justify-content-around">
            <div class="form-group"> <input type="text" class="form-control" id="form7" placeholder="Nombre"> </div>
            <div class="form-group"> <input type="text" class="form-control" id="form7" placeholder="Teléfono"> </div>
            <div class="form-group"> <input type="email" class="form-control" id="form8" placeholder="Correo Electrónico"> </div> <button type="submit" class="btn btn-primary">Regístrate</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-3 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center py-2">¡Nuestros tutores estudian en las mejores universidades!</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="card"> <img class="card-img-top my-3" src="img/udea.png" alt="Card image cap">
              </div>
            </div>
            <div class="col-md-4"><img class="card-img-top py-3" src="img/article_5894_cover_es_ES.png" alt="Card image cap"></div>
            <div class="col-md-4"><img class="card-img-top py-3" src="img/unal.png" alt="Card image cap"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-light bg-primary">
    <div class="container" id="contacto">
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
          <h2 class="mb-4">¿Quieres ser tutor?</h2>
          <form acion="#register">
            <fieldset class="form-group"> <label for="exampleInputEmail1">Ingresa tu email.</label> <input type="email" class="form-control" placeholder="Ingresar email"> </fieldset> <button type="submit" class="btn btn-outline-light">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© 2018-2019 Come Learning.<br></p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>