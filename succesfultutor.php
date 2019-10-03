<?php

$nombre = $_REQUEST['nombre'];
$telefono = $_REQUEST['telefono'];

// Se conecta a IFTTT y manda el SMS

// curl -X POST -H "Content-Type: application/json" -d '{"value1":"3017516045","value2":"Tote"}' 
// https://maker.ifttt.com/trigger/notificar_registro/with/key/EpUT3YUfuSppw5SgNNBwlV6A069QdI5Z-ZBmzagrEQ

//API URL
$url_ifttt = 'https://maker.ifttt.com/trigger/registro_txt_estud/with/key/byZaSDm0U1m4s_EQpTzYJ8';

//create a new cURL resource
$ch_ifttt = curl_init($url_ifttt);

//setup request to send json via POST
$data_ifttt = array(
  'value1' => "$telefono",
  'value2' => "$nombre",
  'value3' => ''
);
$payload_ifttt = json_encode($data_ifttt);

//attach encoded JSON string to the POST fields
curl_setopt($ch_ifttt, CURLOPT_POSTFIELDS, $payload_ifttt);

//set the content type to application/json
curl_setopt($ch_ifttt, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//return response instead of outputting
curl_setopt($ch_ifttt, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch_ifttt);

//close cURL resource
curl_close($ch_ifttt);

$nombre=$_REQUEST['nombre'];
$pass=$_REQUEST['contrasena'];
$telefono=$_REQUEST['telefono'];
$carrera=$_REQUEST['carrera'];
$correo=$_REQUEST['correo'];
$asignatura=$_REQUEST['asignatura'];
$universidad=$_REQUEST['universidad'];
$descripcion=$_REQUEST['descripcion'];
$dia=$_REQUEST['dia'];
$hora=$_REQUEST['hora'];
$precio=$_REQUEST['precio'];
$imagen = utf8_decode($_FILES["fileToUpload"]["name"]);
$servername = "localhost";
$database = "comelearning";
$username = "root";
$password = "";
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Registro exitado. ";
 
$sql = "INSERT INTO tutor (nombre, contrasena, telefono, carrera, correo, asignatura, universidad, descripcion, dia, horarios_disp, precio, imagen)
VALUES ('$nombre', '$pass', '$telefono','$carrera', '$correo', '$asignatura', '$universidad', '$descripcion', '$dia', '$hora', '$precio','$imagen')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

<!DOCTYPE html>
<html>

<head></head>

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
  <div class="py-5 text-center" style="	background-image: url(img/bg2.jpg);	background-size: cover;	background-position: top left;	background-repeat: repeat;">
    <div class="container">
      <div class="row py-5">
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-3">¡Registro satisfactorio!</h3>
          <p class="mb-3 lead">Dentro de poco podrás empezar a recibir clases online con los tutores de las mejores universidades del país.</p>
          <a class="btn btn-outline-primary" href="#">¡Programa una clase ahora mismo!</a>
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