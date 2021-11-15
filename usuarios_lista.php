<!DOCTYPE html>
<html>
<head lang="es">
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
	<title>Beta_ada</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/ol.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa00e73738.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="build/ol.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
</head>
<body>
<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
};

include 'conexion.php';
include 'navbar.php';
$nivel_actual="";
$id_usuario=$_SESSION["id_usuario"];
$sql = "SELECT usuarios.id,usuarios.institucion,usuarios.username,usuarios.nivel,localidades.nombre FROM usuarios LEFT JOIN localidades ON usuarios.id_localidad=localidades.id";
$sql2 = "SELECT * FROM usuarios WHERE id='$id_usuario";
$result2 = $conn->query($sql2);
$result = $conn->query($sql);?>
<div class="main" id="blur">
<table class="table table-striped table-hover">
	<tr>
		<th>ID</th>
		<th>Institucion</th>
		<th>Nombre de usuario</th>
		<th>Nivel</th>
		<th>Localidad</th>
		<th>Modificar</th>
		<th>Eliminar</th>
	</tr>
<?php
while($row = mysqli_fetch_array($result)) {
    if ($row['id']==$id_usuario) {
        $nivel_actual=$row['nivel'];
    }
?>
<tr>
		<td id="identificador"><?php echo $row['id'] ?></td>
		<td><?php echo $row['institucion'] ?></td>
		<td><?php echo $row['username'] ?></td>
		<td><?php echo $row['nivel'] ?></td>
		<td><?php echo ucfirst($row['nombre']) ?></td>
		<td> <a href="moduloeditar.php?id=<?php echo $row['id']; ?>" class="btn btn-info <?php if ($nivel_actual <= $row['nivel'] && $id_usuario!== $row['id']){ echo " disabled";};?>" >✎</a>
		</td>
		<td> <a href="moduloeliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger <?php if ($nivel_actual <= $row['nivel']){ echo " disabled";};?>" <?php if ($id_usuario === $row['id']){ echo " disabled";};?>" >X</a>
		</td>
	</tr>
	<?php 
	}
	 ?>
</table>
<div class="container-fluid"><a href="new_user.php">Añadir usuario</a></div>
</div>
</body>
<script  src="js/main.js"></script>
</html>