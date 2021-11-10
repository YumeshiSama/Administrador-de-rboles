<?php
include "conexion.php";
    $sql = "SELECT * FROM especie ORDER BY nombre_especie='mostrar todos'desc,nombre_especie";
    $result = $conn->query($sql);
?>
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

?>
<?php include 'navbar.php'; ?>
<!--=======================================
					MAP 
========================================-->
<div class="main" id="blur">
	<div class="map_filter">
		<div class="row">
            <div class="col-2">
                <div class="filter_items">
                    <img src="img/logoalpha1.png">
                </div>
            </div>
			<div class="col-8 mb-2">
					<label for="selectCategorias">Especie:</label>
					<select class="form-control select_categoria" id="selectCategorias" name="selectCategorias">
                        <?php
                        foreach($result as $row)
                        {
                            echo '<option value="'.$row['id'].'">'.ucfirst($row['nombre_especie']).'</option>';
                        }
                        ?>
					</select>
			</div>
            <div class="col-2"></div>
		</div>
	</div>
	<div id="mapa"></div>
    <!--======================================
             EDIT MARKER POPUP 
=======================================-->
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="edit_m_popup shadow-lg 4px">
                <div class="row">
                    <div class="col-6">

                    </div>
                    <div class="col-6">
                        
                    </div>
                </div>
                <div class="col-12 m-auto marker_eList card shadow-sm 4px">
                    <div class="container">
                        <form action="#">
                            <div class="row justify-content-end">
                                <div class="col-12 mt-2 mb-2">
                                    <span class="input_eData">Especie:</span>
                                </div>
                                <div class="col-12 mb-2">
                                    <input type="text" class="form-control" name="especie" readonly="readonly">
                                </div>
                                <div class="col-6 mb-2">
                                    <button type="submit" class="btn btn_edit"><i class="fa-solid fa-pen"></i></button>
                                </div>
                                <div class="col-12 mt-2 mb-2">
                                    <span class="input_eData">Edad:</span>
                                </div>
                                <div class="col-12 mb-2">
                                    <input type="text" class="form-control" name="especie" readonly="readonly">
                                </div>
                                <div class="col-6 mb-2">
                                    <button type="submit" class="btn btn_edit"><i class="fa-solid fa-pen"></i></button>
                                </div>
                                <div class="col-12 mt-2 mb-2">
                                    <span class="input_eData">Magnitud:</span>
                                </div>
                                <div class="col-12 mb-2">
                                    <input type="text" class="form-control" name="especie" readonly="readonly">
                                </div>
                                <div class="col-6 mb-2">
                                    <button type="submit" class="btn btn_edit"><i class="fa-solid fa-pen"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--======================================
				MAP SCRIPT 
=======================================-->
<script type="text/javascript">
    let ultimaCapa; // Para removerla cada vez que se selecciona otra categoría


const LATITUD_CENTRO = -36.5311294868868,
    LONGITUD_CENTRO = -56.71174973909938,
    ZOOM = 17;

var mapa = new ol.Map({
    target: 'mapa', // el id del elemento en donde se monta
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([LONGITUD_CENTRO, LATITUD_CENTRO]),
        zoom: ZOOM,
    })
});

const refrescarMapaConCategoria = categoria => {
    fetch(`coordenadas.php?categoria=${categoria}`)
        .then(datos => datos.json())
        .then(coordenadasConIcono => {
            dibujarMarcadoresEnMapa(coordenadasConIcono);
        });
};

const dibujarMarcadoresEnMapa = coordenadasConIcono => {
    if (ultimaCapa) {
        mapa.removeLayer(ultimaCapa);
    }
    const { icono, coordenadas } = coordenadasConIcono;

    const marcadores = [];
    coordenadas.forEach(coordenada => {
        let marcador = new ol.Feature({
            geometry: new ol.geom.Point(
                ol.proj.fromLonLat([coordenada.longitud, coordenada.latitud])
            ),
        });
        marcador.setStyle(new ol.style.Style({
            image: new ol.style.Icon(({
                src: icono,
            }))
        }));
        marcadores.push(marcador);
    });
    ultimaCapa = new ol.layer.Vector({
        source: new ol.source.Vector({
            features: marcadores,
        }),
    });
    mapa.addLayer(ultimaCapa);
};


const $select = document.querySelector("#selectCategorias");
const obtenerCategoriaSeleccionada = () => $select.options[$select.selectedIndex].value;

const refrescarMapaConCategoriaSeleccionada = () => refrescarMapaConCategoria(obtenerCategoriaSeleccionada())
// Cuando seleccionen otra opción, refrescar el mapa
$select.addEventListener("change", refrescarMapaConCategoriaSeleccionada);


// Algunos eventos que podrían ser de utilidad

mapa.on('singleclick', function(evt) {
    var feature = mapa.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
        // Aquí se puede filtrar la feature
        return feature;
    });
    coord = feature.getGeometry().getCoordinates();
    var lon = coord[0];
    var lat = coord[1];
    if (feature) {
        console.log("longitud: ", lon, "latitud: ", lat);
        arbol_popup()
    }
});

function arbol_popup() {
          fetch("http://localhost/github/Administrador-de-rboles/db_arbolData.php")
          .then((res) => res.json())
          .then((data) => {
              console.log(data);
              // data = data[0];
              // console.log(data);
              const divDatos = document.getElementById("datos");
              divDatos.innerHTML="";
              
              // filtra el arbol
              // if (area !== "") {
              //   data = data.filter(function(items){
              //   return (items.id_area == area);
              //   });
              //   console.log(data);
              // } else{}

              data.map((arboles => {
              const div = document.createElement("div");
              div.className += "card"; 
              const img = document.createElement("img");
              img.src = producto.imagen;
              img.className = "img-card";
              const nombre = document.createElement("h2");
              nombre.innerText = producto.nombre;
              const descripcion = document.createElement("h3");
              descripcion.innerText = producto.descripcion;
              const marca = document.createElement("h3");
              marca.innerText = producto.n_marca;
              const precio = document.createElement("p");
              precio.innerText = "precio: " + "$" + producto.precio;
              const stock = document.createElement("p");
              stock.innerText = "quedan: " + producto.stock;
              div.appendChild(img);
              div.appendChild(nombre);
              div.appendChild(descripcion);
              div.appendChild(marca);
              div.appendChild(precio);
              div.appendChild(stock);
              divDatos.appendChild(div);
              }))
            });
        };

let zoomActual = mapa.getView().getZoom();
mapa.on('moveend', function(e) {
    let nuevoZoom = mapa.getView().getZoom();
    if (zoomActual != nuevoZoom) {
        console.log('Nuevo zoom: ' + nuevoZoom);
        zoomActual = nuevoZoom;
    }
});

// Al inicio de todo, obtener con la primer categoría
refrescarMapaConCategoriaSeleccionada();

</script>
</body>
</html>