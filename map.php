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
					<select class="form-control select_categoria" id="selectCategorias">
                        <option value="1">Pinos</option>
						<option value="2">Alamos</option>
                        <option value="3">Arce tridente</option>
						<option value="4">Fresno dorado</option>
                        <option value="5">Crespón</option>
						<option value="6">Fotinia</option>
                        <option value="7">Viscote</option>
						<option value="8">Arce dorado</option>
                        <option value="9">Cedro</option>
						<option value="10">Lapacho rosado</option>
					</select>
			</div>
            <div class="col-2"></div>
		</div>
	</div>
	<div id="mapa"></div>
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
          fetch("http://localhost/github/Sol-de-Mayo/server/productos")
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

              data.map((producto => {
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