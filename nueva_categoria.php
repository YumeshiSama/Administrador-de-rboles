<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
};
include 'conexion.php';

$datename = date("Y-m-d-s-v");
$targetDir = "upl/icn/";
include 'navbar.php';
if(isset($_REQUEST['cargarEspecie'])) // when click on Update button
{
    $nombre = (strtolower($_REQUEST['nombreEspecie']));
    $fileName = basename($_FILES["icon"]["name"]);
	$fileName=$datename.$fileName;
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

	if((!empty($_FILES["icon"]["name"]))){
		// Allow certain file formats
		$allowTypes = array('jpg','png','jpeg');
		if ((!file_exists($targetFilePath))) {
			if((in_array($fileType, $allowTypes))){
				if((move_uploaded_file($_FILES["icon"]["tmp_name"], $targetFilePath))){	
					$consulta ="INSERT INTO `especie` (`id`, `nombre_especie`, `imagen`) VALUES (NULL, '$nombre', 'upl/icn/$fileName')";
                    $qry = mysqli_query($conn, $consulta);
                }
			}
		}
	}


	echo '<script language="javascript">alert("Cargado correctamente");window.location.href="nueva_categoria.php"</script>';
exit;         	
}

if(isset($_REQUEST['cargarCopa'])) // when click on Update button
{
	$copa = (strtolower($_REQUEST['nombreCopa']));
	$consulta ="INSERT INTO `copa` (`id`, `tipo`) VALUES (NULL, '$copa')";
    $qry = mysqli_query($conn, $consulta);

	echo '<script language="javascript">alert("Cargado correctamente");window.location.href="nueva_categoria.php"</script>';
exit;
}
if(isset($_REQUEST['cargarEdad'])) // when click on Update button
{
	$edad = (strtolower($_REQUEST['nombreEdad']));
	$consulta ="INSERT INTO `edad` (`id`, `rango`) VALUES (NULL, '$edad')";
    $qry = mysqli_query($conn, $consulta);

	echo '<script language="javascript">alert("Cargado correctamente");window.location.href="nueva_categoria.php"</script>';
exit;
}
if(isset($_REQUEST['cargarMagnitud'])) // when click on Update button
{
	$magnitud = (strtolower($_REQUEST['nombreMagnitud']));
	$consulta ="INSERT INTO `copa` (`id`, `tamano`) VALUES (NULL, '$magnitud')";
    $qry = mysqli_query($conn, $consulta);

	echo '<script language="javascript">alert("Cargado correctamente");window.location.href="nueva_categoria.php"</script>';
exit;
}
if(isset($_REQUEST['cargarSalud'])) // when click on Update button
{
	$salud = (strtolower($_REQUEST['nombreSalud']));
	$consulta ="INSERT INTO `copa` (`id`, `estado`) VALUES (NULL, '$salud')";
    $qry = mysqli_query($conn, $consulta);

	echo '<script language="javascript">alert("Cargado correctamente");window.location.href="nueva_categoria.php"</script>';
exit;
}
if(isset($_REQUEST['cargarLocali'])) // when click on Update button
{
	$localidad = (strtolower($_REQUEST['nombreLocali']));
	$consulta ="INSERT INTO `localidades` (`id`, `nombre`) VALUES (NULL, '$localidad')";
    $qry = mysqli_query($conn, $consulta);

	echo '<script language="javascript">alert("Cargado correctamente");window.location.href="nueva_categoria.php"</script>';
exit;
}
?>
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


<div class="main" id="blur">

	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombreEspecie">Nombre de la especie</label>
				<input type="text" name="nombreEspecie"  Required>
				<div class="col-3 fileUpload btn btn-primary">
					<span><i class="fa-solid fa-camera"></i></span>
					<input id="icon" type="file" class="upload" name="icon">
				</div>
			</div>
			<input type="submit" class="btn btn-success" name="cargarEspecie" value="Cargar">
		</form>
	</div>
	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombreCopa">Tipo de copa</label>
				<input type="text" name="nombreCopa"  Required>
			</div>
			<input type="submit" class="btn btn-success" name="cargarCopa" value="Cargar">
		</form>
	</div>
	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombreEdad">Tipo de edad</label>
				<input type="text" name="nombreEdad"  Required>
			</div>
			<input type="submit" class="btn btn-success" name="cargarEdad" value="Cargar">
		</form>
	</div>
	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombreMagnitud">Tipo de magnitud</label>
				<input type="text" name="nombreMagnitud"  Required>
			</div>
			<input type="submit" class="btn btn-success" name="cargarMagnitud" value="Cargar">
		</form>
	</div>
	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombreSalud">Tipo de salud</label>
				<input type="text" name="nombreSalud"  Required>
			</div>
			<input type="submit" class="btn btn-success" name="cargarSalud" value="Cargar">
		</form>
	</div>
	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombreLocali">Nombre de la localidad</label>
				<input type="text" name="nombreLocali"  Required>
			</div>
			<input type="submit" class="btn btn-success" name="cargarLocali" value="Cargar">
		</form>
	</div>

</div>

<script  src="js/main.js"></script>
<!-- <script type="text/javascript">
  mybutton = document.getElementsByClassName("btn");


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
};

document.getElementById("uploadBtn_copa").onchange = function () {
    document.getElementById("uploadFile_copa").value = this.value;
};
document.getElementById("uploadBtn_tronco").onchange = function () {
    document.getElementById("uploadFile_tronco").value = this.value;
};

const funcionInit = () => {
	if (!"geolocation" in navigator) {
		return alert("Tu navegador no soporta el acceso a la ubicación. Intenta con otro");
	}


	let idWatcher = null;

	const $latitud = document.querySelector("#latitud"),
		$longitud = document.querySelector("#longitud"),
		$btnIniciar = document.querySelector("#btnIniciar");


	const onUbicacionConcedida = ubicacion => {
		const coordenadas = ubicacion.coords;
		//$latitud.innerText = coordenadas.latitude;
		//$longitud.innerText = coordenadas.longitude;
		$latitud.value = coordenadas.latitude;
		$longitud.value = coordenadas.longitude;
	}

	const onErrorDeUbicacion = err => {

		$latitud.innerText = "Error obteniendo ubicación: " + err.message;
		$longitud.innerText = "Error obteniendo ubicación: " + err.message;
		console.log("Error obteniendo ubicación: ", err);
	}

	const detenerWatcher = () => {
		if (idWatcher) {
			navigator.geolocation.clearWatch(idWatcher);
		}
	}

	const opcionesDeSolicitud = {
		enableHighAccuracy: true, // Alta precisión
		maximumAge: 0, // No queremos caché
		timeout: 5000 // Esperar solo 5 segundos
	};


	$btnIniciar.addEventListener("click", () => {
		detenerWatcher();
		idWatcher = navigator.geolocation.watchPosition(onUbicacionConcedida, onErrorDeUbicacion, opcionesDeSolicitud);
	});

	$latitud.innerText = "Cargando...";
	$longitud.innerText = "Cargando...";


};
document.addEventListener("DOMContentLoaded", funcionInit);
</script> -->
</body>
</html>