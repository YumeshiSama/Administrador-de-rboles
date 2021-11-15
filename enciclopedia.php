<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
	<title>Beta_ada</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
 	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa00e73738.js" crossorigin="anonymous"></script>
</head>
<body>
<?php 
session_start();

include 'conexion.php';
include 'navbar.php';
  $nivel_actual="";
  $id_usuario=$_SESSION["id_usuario"];
  $sql = "SELECT id,imagen_enciclo,nombre_especie,descripcion FROM especie WHERE id>1 ORDER BY nombre_especie asc";
  $result = $conn->query($sql);
?>
<div class="main" id="blur">
  <div class="container">
    <div class="progress_bar_top">
      <div class="row">
        <div class="col-12 col-lg-8 ml-auto mr-auto">
          <div class="multisteps-form__progress">    
          </div>
        </div>
      </div>
    </div>
    <?php 
      foreach($result as $row){
        echo '
        <div class="card">
          <div class="card-body row">
            <h5 class="card-title">'.ucfirst($row['nombre_especie']).'</h5>
            <div class="row">
              <img class="col-md-3" width="100px" src="'.$row['imagen_enciclo'].'" alt="">
              <p class="col-md-6 card-text">'.ucfirst($row['descripcion']).'</p>
            </div>
          </div>
      </div>
        ';
        }
    ?>
  </div>
</div>
</body>
</html>