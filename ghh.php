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
$sql = "SELECT * FROM tutor limit 3 order by rand()";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>
<div class="col-md-4 border-right border-dark">
              <div class="card"> <img class="card-img-top" src="img/Screenshot_2019-04-25-11-50-14-1.png" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title font-weight-bold" contenteditable="true"><?= $record['nombre']?></h4>
                  <p class="card-text">Materia: <?= $record['asignatura']?><br><?= $record['descripcion']?></p> <a href="#" class="btn btn-primary mx-5 text-center" contenteditable="true">Programar clase</a>
                </div>
              </div>
            </div>
<?php } ?>