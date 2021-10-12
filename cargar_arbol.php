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
		              <button class="multisteps-form__progress-btn" type="button" title="cargar">Cargar</button>
		            </div>
		          </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		          <div class="col-12 col-lg-8 m-auto">
		            <form class="multisteps-form__form">
		              <!--====================================
		                                STEP 1
		              =====================================-->
		              <div class="multisteps-form__panel rounded bg-white js-active" data-animation="slideHorz">
		                <h3 class="multisteps-form__title card shadow-sm p-3 mb-4 mt-4 rounded">Caracteristicas del arbol</h3>
		                <div class="multisteps-form__content">
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12 col-sm-6">
		                        <p class="card-text">Especie:</p>
		                      </div>
		                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
		                        <select class="form-control" id="especie" name="especie">
		                          <option>-SELECCIONAR-</option>
		                          <option>Pino</option>
		                          <option>Alamo</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div> 
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <p class="card-text">Copa:</p>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="copa" id="copa_radio1">
		                        <label for="copa_radio1">Globosa</label>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="copa" id="copa_radio2">
		                        <label for="copa_radio2">Piramidal</label>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="copa" id="copa_radio3">
		                        <label for="copa_radio3">Columnar</label>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="copa" id="copa_radio4">
		                        <label for="copa_radio4">Achaparrado</label>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="copa" id="copa_radio5">
		                        <label for="copa_radio5">Llovedizo</label>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <p class="card-text">Magnitud:</p>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="magnitud" id="magnitud_radio1">
		                        <label for="magnitud_radio1">Hasta 5 metros</label>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="magnitud" id="magnitud_radio2">
		                        <label for="magnitud_radio2">De 5 a 15 metros</label>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="magnitud" id="magnitud_radio3">
		                        <label for="magnitud_radio3">Mas de 15 metros</label>
		                      </div>
		                    </div>
		                  </div>
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
		                        <p class="card-text">Poda:</p>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="poda" id="poda_radio1">
		                        <label for="poda_radio1">Buena</label>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="poda" id="poda_radio2">
		                        <label for="poda_radio2">Mala</label>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <p class="card-text">Edad:</p>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="edad" id="edad_radio1">
		                        <label for="edad_radio1">Joven</label>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="edad" id="edad_radio2">
		                        <label for="edad_radio2">Adulto</label>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="edad" id="edad_radio3">
		                        <label for="edad_radio3">Viejo</label>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <p class="card-text">Salud:</p>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="salud" id="salud_radio1">
		                        <label for="salud_radio1">Sano</label>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="salud" id="salud_radio2">
		                        <label for="salud_radio2">Huecos</label>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="salud" id="salud_radio3">
		                        <label for="salud_radio3">Hongos</label>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="salud" id="salud_radio4">
		                        <label for="salud_radio4">Plaga</label>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <p class="card-text">Peligro de caida?:</p>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="caida" id="caida_radio1">
		                        <label for="caida_radio1">Si</label>
		                      </div>
		                      <div class="col-6">
		                        <input type="radio" name="caida" id="caida_radio2">
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
		                        <p class="card-text">Extraccion:</p>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="extraccion" id="extraccion_radio1">
		                        <label for="extraccion_radio1">Posible</label>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="extraccion" id="extraccion_radio2">
		                        <label for="extraccion_radio2">Imposible</label>
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <p class="card-text">Detalles de Extraccion:</p>
		                      </div>
		                      <div class="col-12">
		                        <input type="text" class="form-control" name="detalles_extraccion" id="detalles_extraccion" placeholder="Detalles...">
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <p class="card-text">Distancia con arbol mas cercano:</p>
		                      </div>
		                      <div class="col-12">
		                        <input type="text" class="form-control" name="distancia_arbol" id="distancia_arbol" placeholder="Distancia aproximada...">
		                      </div>
		                    </div>
		                  </div>
		                  <div class="card shadow-sm p-3 mb-4 rounded">
		                    <div class="form-row mt-4">
		                      <div class="col-12">
		                        <p class="card-text">Requiere reemplazo?:</p>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="reemplazo" id="reemplazo_radio1">
		                        <label for="reemplazo_radio1">Si</label>
		                      </div>
		                      <div class="col-12">
		                        <input type="radio" name="reemplazo" id="reemplazo_radio2">
		                        <label for="reemplazo_radio2">No</label>
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
		                <h3 class="multisteps-form__title card shadow-sm p-3 mb-4 mt-4 rounded">¿Completar la carga?</h3>
		                <div class="multisteps-form__content">
		                  <div class="button-row d-flex mt-4">
		                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
		                    <button class="btn btn-success ml-auto" type="button" title="Send">Cargar</button>
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
}
</script>
</body>
</html>