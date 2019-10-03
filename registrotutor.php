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
  <div class="py-5 text-center">
    <div class="container">
      <div class="row py-3">
        <div class="mx-auto col-lg-6 col-10">
          <h1>¡Regístrate!</h1>
          <h4 contenteditable="true">Háblanos más acerca de ti</h4>
          <form class="text-left" method="post" enctype="multipart/form-data" style="" action="succesfultutor.php">
            <div class="form-group"> <label for="form16">Nombre</label> <input type="text" name="nombre" class="form-control" id="form16" placeholder="Come Learning"> </div>
            <div class="form-group"> <label for="form17">Asignatura</label> <select size="4" multiple="" class="form-control" name="asignatura">
                <option value="Matematica">Matemática</option>
                <option value="Quimica">Química</option>
                <option value="Ingles">Inglés</option>
              </select> </div>
            <div class="form-group"> <label for="form18">Correo electrónico</label> <input type="email" name="correo" class="form-control" id="form18" placeholder="info@comelearning.com"> </div>
            <div class="form-group"> <label for="form18">Universidad</label> <input type="text" name="universidad" class="form-control" id="form18" placeholder="¿En qué universidad estudias?"> </div>
            <div class="form-group"> <label for="form18">Carrera</label> <input type="text" name="carrera" class="form-control" id="form18" placeholder="¿Qué carrera estás cursando?"> </div>
            <div class="form-group"> <label for="form18">Numero telefónico</label> <input type="number" name="telefono" class="form-control" id="form18" placeholder="Teléfono"> </div>
            <div class="form-group"><label>Descríbete en 150 caracteres</label><textarea name="descripcion" class="form-control" id="exampleTextarea" rows="3"></textarea></div>
            <div class="form-group w-100">
              <div class="w-100">
                <select name="dia" size="4" multiple="" class="form-control text-left w-100 mt-2">
                  <option value="lunes">Lunes</option>
                  <option value="martes">Martes</option>
                  <option value="miercoles">Miercoles</option>
                  <option value="jueves">Jueves</option>
                  <option value="viernes">Viernes</option>
                  <option value="sabado">Sábado</option>
                </select>
              </div>
              <div class="w-100 mt-2">
                <select name="hora" size="4" multiple="" class="form-control w-100">
                  <option value="8">8:00 AM</option>
                  <option value="9">9:00 AM</option>
                  <option value="10">10:00 AM</option>
                  <option value="11">11:00 AM</option>
                  <option value="12">12:00 M</option>
                  <option value="13">1:00 PM</option>
                  <option value="14">2:00 PM</option>
                  <option value="15">3:00 PM</option>
                  <option value="16">4:00 PM</option>
                  <option value="17">5:00 PM</option>
                  <option value="18">6:00 PM</option>
                </select>
                <div class="form-group"> <label for="form18">Precio</label> <input type="number" name="precio" class="form-control" id="form18" placeholder="¿Cuánto cobras por hora?"> </div>
              </div>
            </div>
            <div class="form-group">
            <label for="exampleFormConyrolFile1">¡Sube tu mejor foto! (Recuerda que debe ser cuadrada)</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
          </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="form19">Password</label> <input type="password" name="contrasena" class="form-control" id="form19" placeholder="••••"> </div>
              <div class="form-group col-md-6"> <label for="form20">Confirm Password</label> <input type="password" class="form-control" id="form20" placeholder="••••"> </div>
            </div>
            <input name="submit" type="submit" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
</body>

</html>