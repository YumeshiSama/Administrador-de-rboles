<?php
include "conexion.php";
$sql = "SELECT * FROM especie WHERE id>1 ORDER BY nombre_especie asc";
$result = $conn->query($sql);
$sqlCopa = "SELECT * FROM copa ORDER BY tipo asc";
$resultCopa = $conn->query($sqlCopa);
$sqlMagnitud = "SELECT * FROM magnitud ORDER BY tamano asc";
$resultMagnitud = $conn->query($sqlMagnitud);
$sqlEdad = "SELECT * FROM edad ORDER BY rango asc";
$resultEdad = $conn->query($sqlEdad);
$sqlSalud = "SELECT * FROM salud ORDER BY estado asc";
$resultSalud = $conn->query($sqlSalud);
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
<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
}
?>
<?php include 'navbar.php'; ?>

<div class="main" id="blur">

<!--=====================================
				FORM UPLOAD 
======================================-->
	<div class="content">
	  <div class="content__inner">
	    <div class="overflow-hidden">
	      <div class="multisteps-form">
	        <!--================================ 
	                    PROGRESS BAR 
	        =================================-->
	        <div class="progress_bar_top">
		        <div class="row">
		          <div class="col-12 col-lg-8 ml-auto mr-auto">
		            <div class="multisteps-form__progress">
		              <button class="multisteps-form__progress-btn js-active" type="button" title="caracteristicas">Caracteristicas</button>
		              <button class="multisteps-form__progress-btn" type="button" title="estado">Estado</button>
		              <button class="multisteps-form__progress-btn" type="button" title="acciones">Acciones</button>
		              <button class="multisteps-form__progress-btn" type="button" title="cargar">Ubicacion</button>
		            </div>
		          </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		          <div class="col-12 col-lg-8 m-auto">
		            <form action="cargar.php" class="multisteps-form__form" method="post" enctype="multipart/form-data">
		              <!--====================================
		                                STEP 1
		              =====================================-->
		              <div class="multisteps-form__panel rounded bg-white js-active" data-animation="slideHorz">
		                <h3 class="multisteps-form__title card shadow-sm p-3 mb-4 mt-4 rounded">Caracteristicas del arbol</h3>
		                <div class="multisteps-form__content">
		                  <div class="shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12 col-sm-6">
		                        <span class="card-text">Especie:</span>
		                      </div>
		                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
		                        <select class="form-control" id="especie" name="especie">
								<?php
									foreach($result as $row)
									{
										echo '<option value="'.$row['id'].'">'.ucfirst($row['nombre_especie']).'</option>';
									}
								?>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12 mb-4">
		                        <span class="card-text">Cargar fotos:</span>
		                      </div>
		                      <div class="col-3 fileUpload btn btn-primary">
		                        <span><i class="fa-solid fa-camera"></i></span>
		                        <input id="uploadBtn_copa" type="file" class="upload" name="copa">
		                      </div>
		                      <div class="col-9">
		                        <input type="text" class="form-control" id="uploadFile_copa" placeholder="Copa..." name="copa_file_name" readonly="readonly" >
		                      </div>
		                      <div class="col-12">
		                      	</br>
		                      </div>
		                      <div class="col-3 fileUpload btn btn-primary">
		                        <span><i class="fa-solid fa-camera"></i></span>
		                        <input id="uploadBtn_tronco" type="file" class="upload" name="tronco">
		                      </div>
		                      <div class="col-9">
		                        <input type="text" id="uploadFile_tronco" class="form-control" placeholder="Tronco..." name="tronco_file_name" readonly="readonly">
		                      </div>
		                    </div>
		                  </div>
						  <!-- aaaaaaaaaaaaaaaaaaa -->
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">Tipo de copa:</span>
		                      </div>
							  <?php
									foreach($resultCopa as $rowCopa){
									if ($rowCopa['id']==1)
									{
										echo '<div class="col-12">
												<input  checked type="radio" value="'.$rowCopa['id'].'" name="copa">
												<label>'.ucfirst($rowCopa['tipo']).'</label>
											</div>';
									} else {
										echo '<div class="col-12">
												<input type="radio" value="'.$rowCopa['id'].'" name="copa">
												<label>'.ucfirst($rowCopa['tipo']).'</label>
											</div>';
									}
								}
								?>
		                    </div>
		                  </div>
						  <!-- aaaaaaaaaaaaaaaaaaa -->
						  <!-- aaaaaaaaaaaaaaaaaaa -->
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">Magnitud:</span>
		                      </div>
							  <?php
									foreach($resultMagnitud as $rowMagnitud){
									if ($rowMagnitud['id']==1)
									{
										echo '<div class="col-12">
												<input  checked type="radio" value="'.$rowMagnitud['id'].'" name="magnitud">
												<label>'.ucfirst($rowMagnitud['tamano']).'</label>
											</div>';
									} else {
										echo '<div class="col-12">
												<input type="radio" value="'.$rowMagnitud['id'].'" name="magnitud">
												<label>'.ucfirst($rowMagnitud['tamano']).'</label>
											</div>';
									}
								}
								?>
		                    </div>
		                  </div>
						  <!-- aaaaaaaaaaaaaaaaaaa -->
		                  <div class="button-row d-flex mt-4">
		                    <button class="btn btn-primary ml-auto js-btn-next" onclick="topFunction()" type="button" title="Next">Siguiente</button>
		                  </div>
		                </div>
		              </div>
		              <!--===================================
		                              STEP 2  
		              ====================================-->
		              <div class="multisteps-form__panel rounded bg-white" data-animation="slideHorz">
		                <h3 class="multisteps-form__title card shadow-sm p-3 mb-4 mt-4 rounded">Estado del arbol</h3>
		                <div class="multisteps-form__content">
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">¿Se puede podar?</span>
		                      </div>
		                      <div class="col-6">
		                        <input checked type="radio" value="1" name="poda" id="poda_radio1">
		                        <label for="poda_radio1">Si</label>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" value="0" name="poda" id="poda_radio2">
		                        <label for="poda_radio2">No</label>
		                      </div>
		                    </div>
		                  </div>
						  <!-- aaaaaaaaaaaaaaaaaaa -->
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">Edad:</span>
		                      </div>
							  <?php
									foreach($resultEdad as $rowEdad){
									if ($rowEdad['id']==1)
									{
										echo '<div class="col-12">
												<input  checked type="radio" value="'.$rowEdad['id'].'" name="edad">
												<label>'.ucfirst($rowEdad['rango']).'</label>
											</div>';
									} else {
										echo '<div class="col-12">
												<input type="radio" value="'.$rowEdad['id'].'" name="edad">
												<label>'.ucfirst($rowEdad['rango']).'</label>
											</div>';
									}
								}
								?>
		                    </div>
		                  </div>
						  <!-- aaaaaaaaaaaaaaaaaaa -->
						  <!-- aaaaaaaaaaaaaaaaaaa -->
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">Salud:</span>
		                      </div>
							  <?php
									foreach($resultSalud as $rowSalud){
									if ($rowSalud['id']==1)
									{
										echo '<div class="col-12">
												<input  checked type="radio" value="'.$rowSalud['id'].'" name="Salud">
												<label>'.ucfirst($rowSalud['estado']).'</label>
											</div>';
									} else {
										echo '<div class="col-12">
												<input type="radio" value="'.$rowSalud['id'].'" name="Salud">
												<label>'.ucfirst($rowSalud['estado']).'</label>
											</div>';
									}
								}
								?>
		                    </div>
		                  </div>
						  <!-- aaaaaaaaaaaaaaaaaaa -->
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">¿Está en peligro de caida?:</span>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" value="1" name="caida" id="caida_radio1">
		                        <label for="caida_radio1">Si</label>
		                      </div>
		                      <div class="col-6">
		                        <input checked type="radio" value="0" name="caida" id="caida_radio2">
		                        <label for="caida_radio2">No</label>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="button-row d-flex mt-4">
		                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
		                    <button class="btn btn-primary ml-auto js-btn-next" onclick="topFunction()" type="button" title="Next">Siguiente</button>
		                  </div>
		                </div>
		              </div>
		              <!--=====================================
		                                STEP 3
		              ======================================-->
		              <div class="multisteps-form__panel rounded bg-white" data-animation="slideHorz">
		                <h3 class="multisteps-form__title card shadow-sm p-3 mb-4 mt-4 rounded">Acciones posibles</h3>
		                <div class="multisteps-form__content">
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">¿Es extraible?:</span>
		                      </div>
		                      <div class="col-12">
		                        <input checked type="radio" value="1" name="extraccion" id="extraccion_radio1">
		                        <label for="extraccion_radio1">Si</label>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" value="0" name="extraccion" id="extraccion_radio2">
		                        <label for="extraccion_radio2">No</label>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">Detalles de Extraccion:</span>
		                      </div>
		                      <div class="col-12">
		                        <input type="text" maxlength="360" class="form-control" name="detalles_extraccion" id="detalles_extraccion" placeholder="Detalles...">
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">Distancia con arbol mas cercano (en metros, redondeado):</span>
		                      </div>
		                      <div class="col-12">
		                        <input type="number" maxlength="50" class="form-control" name="distancia_arbol" id="distancia_arbol" placeholder="Distancia aproximada...">
		                      </div>
		                    </div>
		                  </div>
		                  <div class="row">
		                    <div class="button-row d-flex mt-4 col-12">
		                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
		                      <button class="btn btn-primary ml-auto js-btn-next" onclick="topFunction()" type="button" title="Next">Siguiente</button>
		                    </div>
		                  </div>
		                </div>
		              </div>
		              <!--=====================================
		                                STEP 4
		              ======================================-->
		              <div class="multisteps-form__panel rounded bg-white" data-animation="slideHorz">
		                <h3 class="multisteps-form__title card shadow-sm p-3 mb-4 mt-4 rounded">Ubicacion</h3>
		                <div class="multisteps-form__content">
		                	<div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <span class="card-text">Cargar ubicacion:</span>
		                      </div>
		                      <div class="col-12">
		                        <a href="#" class="form_items" id="btnIniciar">
									<i class="fa-solid fa-location-dot"></i>
									<span class="menu_text">Mi ubicacion</span>
								</a>
		                      </div>
		                      <div class="col-6">
		                        <span class="card-text">Latitud:</span>
		                      </div>
		                      <div class="col-6">
							  <input type="text" class="form-control" name="latitud" id="latitud" readonly="readonly">
		                      </div>
		                      <div class="col-6">
		                        <span class="card-text">Longitud:</span>
		                      </div>
		                      <div class="col-6">
								  <input type="text" class="form-control" name="longitud" id="longitud" readonly="readonly">
		                      </div>
		                    </div>
		                  </div>
			                <div class="button-row d-flex mt-4">
				                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
				                <button class="btn btn-success ml-auto" type="submit" title="Send">Cargar</button>
			                </div>
		                </div>
		              </div>
		              <!--=====================================
		                                END
		              ======================================-->
		            </form>
		          </div>
		        </div>
		      </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<!--=====================================
			SCRIPT FORM UPLOAD 
======================================-->
<script  src="js/main.js"></script>
<script type="text/javascript">
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
</script>
</body>
</html>