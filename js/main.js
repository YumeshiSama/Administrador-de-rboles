/*
############################
============================
		Mapa
============================
############################
*/

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
    if (feature) {
        console.log("Click en: ", feature);
    }
});



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
/*
############################
============================
		pop up 1
============================
############################
*/
var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
/*
############################
============================
		pop up 2
============================
############################
*/
var btnAbrirPopup2 = document.getElementById('btn-abrir-popup2'),
	overlay2 = document.getElementById('overlay2'),
	popup2 = document.getElementById('popup2'),
	btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2');

btnAbrirPopup2.addEventListener('click', function(){
	overlay2.classList.add('active');
	popup2.classList.add('active');
});

btnCerrarPopup2.addEventListener('click', function(e){
	e.preventDefault();
	overlay2.classList.remove('active');
	popup2.classList.remove('active');
});
/*
############################
============================
		pop up 3
============================
############################
*/
var btnAbrirPopup3 = document.getElementById('btn-abrir-popup3'),
	overlay3 = document.getElementById('overlay3'),
	popup3 = document.getElementById('popup3'),
	btnCerrarPopup3 = document.getElementById('btn-cerrar-popup3');

btnAbrirPopup3.addEventListener('click', function(){
	overlay3.classList.add('active');
	popup3.classList.add('active');
});

btnCerrarPopup3.addEventListener('click', function(e){
	e.preventDefault();
	overlay3.classList.remove('active');
	popup3.classList.remove('active');
});
/*
############################
============================
		pop up 4
============================
############################
*/
var btnAbrirPopup4 = document.getElementById('btn-abrir-popup4'),
	overlay4 = document.getElementById('overlay4'),
	popup4 = document.getElementById('popup4'),
	btnCerrarPopup4 = document.getElementById('btn-cerrar-popup4');

btnAbrirPopup4.addEventListener('click', function(){
	overlay4.classList.add('active');
	popup4.classList.add('active');
});

btnCerrarPopup4.addEventListener('click', function(e){
	e.preventDefault();
	overlay4.classList.remove('active');
	popup4.classList.remove('active');
});
/*
############################
============================
		pop up 5
============================
############################
*/
var btnAbrirPopup5 = document.getElementById('btn-abrir-popup5'),
	overlay5 = document.getElementById('overlay5'),
	popup5 = document.getElementById('popup5'),
	btnCerrarPopup5 = document.getElementById('btn-cerrar-popup5');

btnAbrirPopup5.addEventListener('click', function(){
	overlay5.classList.add('active');
	popup5.classList.add('active');
});

btnCerrarPopup5.addEventListener('click', function(e){
	e.preventDefault();
	overlay5.classList.remove('active');
	popup5.classList.remove('active');
});
/*
############################
============================
		pop up 6
============================
############################
*/
var btnAbrirPopup6 = document.getElementById('btn-abrir-popup6'),
	overlay6 = document.getElementById('overlay6'),
	popup6 = document.getElementById('popup6'),
	btnCerrarPopup6 = document.getElementById('btn-cerrar-popup6');

btnAbrirPopup6.addEventListener('click', function(){
	overlay6.classList.add('active');
	popup6.classList.add('active');
});

btnCerrarPopup6.addEventListener('click', function(e){
	e.preventDefault();
	overlay6.classList.remove('active');
	popup6.classList.remove('active');
});
/*
############################
============================
		pop up 7
============================
############################
*/
var btnAbrirPopup7 = document.getElementById('btn-abrir-popup7'),
	overlay7 = document.getElementById('overlay7'),
	popup7 = document.getElementById('popup7'),
	btnCerrarPopup7 = document.getElementById('btn-cerrar-popup7');

btnAbrirPopup7.addEventListener('click', function(){
	overlay7.classList.add('active');
	popup7.classList.add('active');
});

btnCerrarPopup7.addEventListener('click', function(e){
	e.preventDefault();
	overlay7.classList.remove('active');
	popup7.classList.remove('active');
});
/*
############################
============================
		pop up 8
============================
############################
*/
var btnAbrirPopup8 = document.getElementById('btn-abrir-popup8'),
	overlay8 = document.getElementById('overlay8'),
	popup8 = document.getElementById('popup8'),
	btnCerrarPopup8 = document.getElementById('btn-cerrar-popup8');

btnAbrirPopup8.addEventListener('click', function(){
	overlay8.classList.add('active');
	popup8.classList.add('active');
});

btnCerrarPopup8.addEventListener('click', function(e){
	e.preventDefault();
	overlay8.classList.remove('active');
	popup8.classList.remove('active');
});
/*
############################
============================
		pop up 9
============================
############################
*/
var btnAbrirPopup9 = document.getElementById('btn-abrir-popup9'),
	overlay9 = document.getElementById('overlay9'),
	popup9 = document.getElementById('popup9'),
	btnCerrarPopup9 = document.getElementById('btn-cerrar-popup9');

btnAbrirPopup9.addEventListener('click', function(){
	overlay9.classList.add('active');
	popup9.classList.add('active');
});

btnCerrarPopup9.addEventListener('click', function(e){
	e.preventDefault();
	overlay9.classList.remove('active');
	popup9.classList.remove('active');
});
/*
############################
============================
		pop up 10
============================
############################
*/
var btnAbrirPopup10 = document.getElementById('btn-abrir-popup10'),
	overlay10 = document.getElementById('overlay10'),
	popup10 = document.getElementById('popup10'),
	btnCerrarPopup10 = document.getElementById('btn-cerrar-popup10');

btnAbrirPopup10.addEventListener('click', function(){
	overlay10.classList.add('active');
	popup10.classList.add('active');
});

btnCerrarPopup10.addEventListener('click', function(e){
	e.preventDefault();
	overlay10.classList.remove('active');
	popup10.classList.remove('active');
});