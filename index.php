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
if (empty($_SESSION["id_usuario"])) {
    $id=false;
	$nivel=0;
}else {
	$id=$_SESSION['id_usuario'];
	$sql5 = "SELECT nivel FROM usuarios WHERE id='$id'";
	$result5 = $conn->query($sql5);
	$nivel="";
	while($row5 = mysqli_fetch_array($result5)) {
	$nivel = $row5['nivel'];
}
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
            <div class="edit_m_popup shadow-lg 4px zoom-in inactive">
                <div class="row">
                    <div class="col-6 col-lg-3 marker_eImgDiv">
                        <img class="marker_eImg">
                    </div>
                    <div class="col-6 col-lg-9 marker_eTextDiv">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <span>Numero:</span>
                                <p class="marker_number"></p>   
                            </div>
                            <div class="col-12 col-lg-6">
                                <span>Usuario:</span>
                                <p class="marker_user"></p>  
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-12 m-auto marker_eList card shadow-sm 4px mt-4">
                    <div class="container">
                            <div class="row">

                                <form action="#">
                                    <input type="text" class="markerId1" name="id" hidden="true">
                                    <input type="text" class="markerType1" name="type" hidden="true" value="1">
                                    <div class="col-12 mt-2 mb-2">
                                        <span class="input_eData">Especie:</span>
                                    </div>
                                    <div class="e_especie">
                                        <div class="col-12 mb-2 markerData1">
                                            <!--INPUT ESPECIE-->
                                        </div>
                                        <?php
                                            if ($nivel>=2) {
                                                echo '
                                                    <div class="row mb-2 justify-content-end markerBtn1">
                                                    <!--BUTTON ESPECIE-->
                                                    </div>
                                                ';}
                                        ?>
                                    </div>
                                </form>

                                <form action="#">
                                    <input type="text" class="markerId2" name="id" hidden="true">
                                    <input type="text" class="markerType2" name="type" hidden="true" value="2">
                                    <div class="col-12 mt-2 mb-2">
                                        <span class="input_eData">Edad:</span>
                                    </div>
                                    <div class="e_edad">
                                        <div class="col-12 mb-2 markerData2">
                                            <!--INPUT EDAD-->
                                        </div>
                                        <?php
                                        if ($nivel>=2) {
                                                echo '
                                                    <div class="row mb-2 justify-content-end markerBtn2">
                                                    <!--BUTTON EDAD-->
                                                    </div>
                                                ';}
                                        ?>
                                    </div>
                                </form>

                                <form action="#">
                                    <input type="text" class="markerId3" name="id" hidden="true">
                                    <input type="text" class="markerType3" name="type" hidden="true" value="3">
                                    <div class="col-12 mt-2 mb-2">
                                        <span class="input_eData">Magnitud:</span>
                                    </div>
                                    <div class="e_magnitud">
                                        <div class="col-12 mb-2 markerData3">
                                            <!--INPUT MAGNITUD-->
                                        </div>
                                        <?php
                                        if ($nivel>=2) {
                                                echo '
                                                    <div class="row mb-2 justify-content-end markerBtn3">
                                                    <!--BUTTON MAGNITUD-->
                                                    </div>
                                                ';}
                                        ?>
                                    </div>
                                </form>

                                <form action="#">
                                    <input type="text" class="markerId4" name="id" hidden="true">
                                    <input type="text" class="markerType4" name="type" hidden="true" value="4">
                                    <div class="col-12 mt-2 mb-2">
                                        <span class="input_eData">Copa:</span>
                                    </div>
                                    <div class="e_copa">
                                        <div class="col-12 mb-2 markerData4">
                                            <!--INPUT COPA-->
                                        </div>
                                        <?php
                                        if ($nivel>=2) {
                                                echo '
                                                    <div class="row mb-2 justify-content-end markerBtn4">
                                                    <!--BUTTON COPA-->
                                                    </div>
                                                ';}
                                        ?>
                                    </div>
                                </form>

                                <form action="#">
                                    <input type="text" class="markerId5" name="id" hidden="true">
                                    <input type="text" class="markerType5" name="type" hidden="true" value="5">
                                    <div class="col-12 mt-2 mb-2">
                                        <span class="input_eData">Salud:</span>
                                    </div>
                                    <div class="e_salud">
                                        <div class="col-12 mb-2 markerData5">
                                            <!--INPUT SALUD-->
                                        </div>
                                        <?php
                                        if ($nivel>=2) {
                                                echo '
                                                    <div class="row mb-2 justify-content-end markerBtn5">
                                                    <!--BUTTON SALUD-->
                                                    </div>
                                                ';}
                                        ?>
                                    </div>
                                </form>

                                <form action="#">
                                    <input type="text" class="markerId6" name="id" hidden="true">
                                    <input type="text" class="markerType6" name="type" hidden="true" value="6">
                                    <div class="col-12 mt-2 mb-2">
                                        <span class="input_eData">Comentarios:</span>
                                    </div>
                                    <div class="e_comentarios">
                                        <div class="col-12 mb-2 markerData6">
                                            <!--INPUT COMENTARIOS-->
                                        </div>
                                        <?php
                                        if ($nivel>=2) {
                                                echo '
                                                    <div class="row mb-2 justify-content-end markerBtn6">
                                                    <!--BUTTON COMENTARIOS-->
                                                    </div>
                                                ';}
                                        ?>
                                    </div>
                                </form>

                                    <?php 
                                        if ($nivel>=2) {
                                            echo '
                                                <form action="#">
                                                <div class="col-12 mt-2 mb-2">
                                                <span class="input_eData">Eliminar:</span>
                                                </div>
                                                <input type="text" class="markerId99" name="id" hidden="true">
                                                <div class="col-12 m-auto">
                                                <div class="container">
                                                    <button class="btn btn_red btn_eliminar btn_del mb-2" formaction="del_arbolData.php"><i class="fa-solid fa-trash-can"></i></button>
                                                </div>
                                                </div>
                                                </form>
                                            ';}
                                    ?>
                            </div>
                    </div>
                </div>

                <?php
                if ($nivel>=2) {
                      echo '
                      <div class="container mt-2 marker_sendAlert">
                    <span>Enviar alerta:</span>
                    <div class="row mt-2">
                        <div class="col-6">
                            <select class="form-control">
                                <option>Amarilla</option>
                                <option>Naranja</option>
                                <option>Roja</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <button class="btn btn_localColor btn_alerta">Alertar</button>
                        </div>
                    </div>
                </div>
                      ';}  
                ?>
                <div class="col-12 m-auto fixed-bottom">
                    <div class="container">
                        <button class="btn btn_localColor btn_cerrar mt-2 mb-2">Cerrar</button>
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
    let contador = -1
    coordenadas.forEach(coordenada => {
        contador += 1
        let marcador = new ol.Feature({
            geometry: new ol.geom.Point(
                ol.proj.fromLonLat([coordenada.longitud, coordenada.latitud])
            ),
        });
        marcador.setStyle(new ol.style.Style({
            image: new ol.style.Icon(({
                src: icono[contador],
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

edit_m_popup = document.querySelector(".edit_m_popup");
btn_cerrar = document.querySelector(".btn_cerrar");

btn_cerrar.addEventListener('click', function(){
    edit_m_popup.classList.toggle('active');
    edit_m_popup.classList.toggle('inactive');
    edit_m_popup.style.visibility = 'hidden';
});

var meters2degress = function(lon,lat) {
    var x = lon *  180 / 20037508.34 ;
    //thanks magichim @ github for the correction
    var y = Math.atan(Math.exp(lat * Math.PI / 20037508.34)) * 360 / Math.PI - 90; 

    x= (+x).toFixed(7).replace(/(\.0+|0+)$/, '')

    y= (+y).toFixed(7).replace(/(\.0+|0+)$/, '')
            
    $lon = x;
    $lat = y;

}

mapa.on('singleclick', function(evt) {
    var feature = mapa.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
        // Aquí se puede filtrar la feature
        return feature;
    });
    if (feature) {
        coord = feature.getGeometry().getCoordinates();
        edit_m_popup.classList.toggle('inactive');
        edit_m_popup.classList.toggle('active');
        edit_m_popup.style.visibility = 'visible';
        var lon = coord[0];
        var lat = coord[1];

        meters2degress(lon,lat);

        console.log("longitud: ", $lon, "latitud: ", $lat);
         arbol_popup();
    }
});

function arbol_popup() {

          fetch("https://tecnica1lacosta.com.ar/ada/db_arbolData.php")


          .then((res) => res.json())
          .then((data) => {
              console.log(data);
              // data = data[0];
              // console.log(data);
              var nivel = "<?php echo"$nivel"?>";
              const marker_eImg = document.querySelector(".marker_eImg");
              marker_eImg.setAttribute('src', "");
              const marker_number = document.querySelector(".marker_number");
              marker_number.innerText = "";
              const marker_user = document.querySelector(".marker_user");
              marker_user.innerText = "";
              <?php 
                if ($nivel>=2) {
                    echo '
                      const markerId1 = document.querySelector(".markerId1");
                      markerId1.innerText = "";
                      const markerId2 = document.querySelector(".markerId2");
                      markerId2.innerText = "";
                      const markerId3 = document.querySelector(".markerId3");
                      markerId3.innerText = "";
                      const markerId4 = document.querySelector(".markerId4");
                      markerId4.innerText = "";
                      const markerId5 = document.querySelector(".markerId5");
                      markerId5.innerText = "";
                      const markerId6 = document.querySelector(".markerId6");
                      markerId6.innerText = "";
                      const markerId99 = document.querySelector(".markerId99");
                      markerId99.innerText = "";
                    ';}    
              ?>


              // ============ ESPECIE ==============
              const markerData1 = document.querySelector(".markerData1");
              markerData1.innerHTML="";

              const e_especie = document.createElement("input");
              e_especie.type = "text";
              e_especie.className = "form-control e_especie";
              e_especie.name = "e_especie";
              e_especie.readOnly = true;

              <?php
                if ($nivel>=2) { echo '
                    const markerBtn1 = document.querySelector(".markerBtn1");
              markerBtn1.innerHTML="";

              const e_btn1 = document.createElement("div");
              e_btn1.className = "col-6";

              const e_btn_especie = document.createElement("button");
              e_btn_especie.type = "submit";
              e_btn_especie.className = "btn btn_yellow e_btn_especie";
              e_btn_especie.innerHTML = \'<i class="fa-solid fa-pen"></i>\';


              e_btn_especie.addEventListener( \'click\', function(){
                markerData1.innerHTML="";
                markerBtn1.innerHTML="";

                const c_btn1 = document.createElement("div");
                c_btn1.className = "col-6";

                const c_btn_especie = document.createElement("button");
                c_btn_especie.type = "submit";
                c_btn_especie.className = "btn btn_red c_btn_especie";
                c_btn_especie.innerHTML = \'<i class="fa-solid fa-ban"></i>\';

                const s_btn1 = document.createElement("div");
                s_btn1.className = "col-6";

                const s_btn_especie = document.createElement("button");
                s_btn_especie.type = "submit";
                s_btn_especie.className = "btn btn_green s_btn_especie";
                s_btn_especie.innerHTML = \'<i class="fa-solid fa-check"></i>\';
                s_btn_especie.formAction = "edit_arbolData.php";

                const input_especie = document.createElement("select");
                input_especie.className = "form-control";
                input_especie.name = "especie";

                fetch("https://tecnica1lacosta.com.ar/ada/db_especieData.php")
                .then((res) => res.json())
                .then((data) => {
                console.log(data);
                // data = data[0];
                // console.log(data);

                data = data.filter(function(items){
                return (items.id > 1);
                });

                data.map((especie => {
                    const o_categoria = document.createElement("option");
                    o_categoria.value = especie.id;
                    o_categoria.innerText = especie.nombre_especie;

                    input_especie.appendChild(o_categoria);
                }))
                });

                c_btn1.appendChild(c_btn_especie);
                s_btn1.appendChild(s_btn_especie);
                markerBtn1.appendChild(c_btn1);
                markerBtn1.appendChild(s_btn1);
                markerData1.appendChild(input_especie);

                })
                    ';}

              ?>

              // ============ EDAD ==============

              const markerData2 = document.querySelector(".markerData2");
              markerData2.innerHTML="";

              const e_edad = document.createElement("input");
              e_edad.type = "text";
              e_edad.className = "form-control e_edad";
              e_edad.name = "e_edad";
              e_edad.readOnly = true;

              <?php
              if ($nivel>=2) {echo '
                const markerBtn2 = document.querySelector(".markerBtn2");
              markerBtn2.innerHTML="";

              const e_btn2 = document.createElement("div");
              e_btn2.className = "col-6";

              const e_btn_edad = document.createElement("button");
              e_btn_edad.type = "submit";
              e_btn_edad.className = "btn btn_yellow e_btn_edad";
              e_btn_edad.innerHTML = \'<i class="fa-solid fa-pen"></i>\';


              e_btn_edad.addEventListener( \'click\', function(){
                markerData2.innerHTML="";
                markerBtn2.innerHTML="";

                const c_btn2 = document.createElement("div");
                c_btn2.className = "col-6";

                const c_btn_edad = document.createElement("button");
                c_btn_edad.type = "submit";
                c_btn_edad.className = "btn btn_red c_btn_edad";
                c_btn_edad.innerHTML = \'<i class="fa-solid fa-ban"></i>\';

                const s_btn2 = document.createElement("div");
                s_btn2.className = "col-6";

                const s_btn_edad = document.createElement("button");
                s_btn_edad.type = "submit";
                s_btn_edad.className = "btn btn_green s_btn_edad";
                s_btn_edad.innerHTML = \'<i class="fa-solid fa-check"></i>\';
                s_btn_edad.formAction = "edit_arbolData.php";

                const input_edad = document.createElement("select");
                input_edad.className = "form-control";
                input_edad.name = "edad";

                fetch("https://tecnica1lacosta.com.ar/ada/db_edadData.php")
                .then((res) => res.json())
                .then((data) => {
                console.log(data);
                // data = data[0];
                // console.log(data);

                data.map((edad => {
                    const o_categoria = document.createElement("option");
                    o_categoria.value = edad.id;
                    o_categoria.innerText = edad.rango;

                    input_edad.appendChild(o_categoria);
                }))
                });

                c_btn2.appendChild(c_btn_edad);
                s_btn2.appendChild(s_btn_edad);
                markerBtn2.appendChild(c_btn2);
                markerBtn2.appendChild(s_btn2);
                markerData2.appendChild(input_edad);

              })
                ';}
              ?>
              // ============ MAGNITUD ==============

              const markerData3 = document.querySelector(".markerData3");
              markerData3.innerHTML="";

              const e_magnitud = document.createElement("input");
              e_magnitud.type = "text";
              e_magnitud.className = "form-control e_magnitud";
              e_magnitud.name = "e_magnitud";
              e_magnitud.readOnly = true;

              <?php
              if ($nivel>=2) { echo'
                const markerBtn3 = document.querySelector(".markerBtn3");
              markerBtn3.innerHTML="";

              const e_btn3 = document.createElement("div");
              e_btn3.className = "col-6";

              const e_btn_magnitud = document.createElement("button");
              e_btn_magnitud.type = "submit";
              e_btn_magnitud.className = "btn btn_yellow e_btn_magnitud";
              e_btn_magnitud.innerHTML = \'<i class="fa-solid fa-pen"></i>\';


              e_btn_magnitud.addEventListener( \'click\', function(){
                markerData3.innerHTML="";
                markerBtn3.innerHTML="";

                const c_btn3 = document.createElement("div");
                c_btn3.className = "col-6";

                const c_btn_magnitud = document.createElement("button");
                c_btn_magnitud.type = "submit";
                c_btn_magnitud.className = "btn btn_red c_btn_magnitud";
                c_btn_magnitud.innerHTML = \'<i class="fa-solid fa-ban"></i>\';

                const s_btn3 = document.createElement("div");
                s_btn3.className = "col-6";

                const s_btn_magnitud = document.createElement("button");
                s_btn_magnitud.type = "submit";
                s_btn_magnitud.className = "btn btn_green s_btn_magnitud";
                s_btn_magnitud.innerHTML = \'<i class="fa-solid fa-check"></i>\';
                s_btn_magnitud.formAction = "edit_arbolData.php";

                const input_magnitud = document.createElement("select");
                input_magnitud.className = "form-control";
                input_magnitud.name = "magnitud";

                fetch("https://tecnica1lacosta.com.ar/ada/db_magnitudData.php")
                .then((res) => res.json())
                .then((data) => {
                console.log(data);
                // data = data[0];
                // console.log(data);

                data.map((magnitud => {
                    const o_categoria = document.createElement("option");
                    o_categoria.value = magnitud.id;
                    o_categoria.innerText = magnitud.tamano;

                    input_magnitud.appendChild(o_categoria);
                }))
                });

                c_btn3.appendChild(c_btn_magnitud);
                s_btn3.appendChild(s_btn_magnitud);
                markerBtn3.appendChild(c_btn3);
                markerBtn3.appendChild(s_btn3);
                markerData3.appendChild(input_magnitud);

              })
                ';}
              ?>
              // ============ COPA ==============

              const markerData4 = document.querySelector(".markerData4");
              markerData4.innerHTML="";

              const e_copa = document.createElement("input");
              e_copa.type = "text";
              e_copa.className = "form-control e_copa";
              e_copa.name = "e_copa";
              e_copa.readOnly = true;

              <?php
              if ($nivel>=2) { echo'
                const markerBtn4 = document.querySelector(".markerBtn4");
              markerBtn4.innerHTML="";

              const e_btn4 = document.createElement("div");
              e_btn4.className = "col-6";

              const e_btn_copa = document.createElement("button");
              e_btn_copa.type = "submit";
              e_btn_copa.className = "btn btn_yellow e_btn_copa";
              e_btn_copa.innerHTML = \'<i class="fa-solid fa-pen"></i>\';


              e_btn_copa.addEventListener( \'click\', function(){
                markerData4.innerHTML="";
                markerBtn4.innerHTML="";

                const c_btn4 = document.createElement("div");
                c_btn4.className = "col-6";

                const c_btn_copa = document.createElement("button");
                c_btn_copa.type = "submit";
                c_btn_copa.className = "btn btn_red c_btn_copa";
                c_btn_copa.innerHTML = \'<i class="fa-solid fa-ban"></i>\';

                const s_btn4 = document.createElement("div");
                s_btn4.className = "col-6";

                const s_btn_copa = document.createElement("button");
                s_btn_copa.type = "submit";
                s_btn_copa.className = "btn btn_green s_btn_copa";
                s_btn_copa.innerHTML = \'<i class="fa-solid fa-check"></i>\';
                s_btn_copa.formAction = "edit_arbolData.php";

                const input_copa = document.createElement("select");
                input_copa.className = "form-control";
                input_copa.name = "copa";

                fetch("https://tecnica1lacosta.com.ar/ada/db_copaData.php")
                .then((res) => res.json())
                .then((data) => {
                console.log(data);
                // data = data[0];
                // console.log(data);

                data.map((copa => {
                    const o_categoria = document.createElement("option");
                    o_categoria.value = copa.id;
                    o_categoria.innerText = copa.tipo;

                    input_copa.appendChild(o_categoria);
                }))
                });

                c_btn4.appendChild(c_btn_copa);
                s_btn4.appendChild(s_btn_copa);
                markerBtn4.appendChild(c_btn4);
                markerBtn4.appendChild(s_btn4);
                markerData4.appendChild(input_copa);

              })
                ';}
              ?>
              // ============ SALUD ==============

              const markerData5 = document.querySelector(".markerData5");
              markerData5.innerHTML="";

              const e_salud = document.createElement("input");
              e_salud.type = "text";
              e_salud.className = "form-control e_salud";
              e_salud.name = "e_salud";
              e_salud.readOnly = true;

              <?php
              if ($nivel>=2) { echo'
                const markerBtn5 = document.querySelector(".markerBtn5");
              markerBtn5.innerHTML="";

              const e_btn5 = document.createElement("div");
              e_btn5.className = "col-6";

              const e_btn_salud = document.createElement("button");
              e_btn_salud.type = "submit";
              e_btn_salud.className = "btn btn_yellow e_btn_salud";
              e_btn_salud.innerHTML = \'<i class="fa-solid fa-pen"></i>\';


              e_btn_salud.addEventListener( \'click\', function(){
                markerData5.innerHTML="";
                markerBtn5.innerHTML="";

                const c_btn5 = document.createElement("div");
                c_btn5.className = "col-6";

                const c_btn_salud = document.createElement("button");
                c_btn_salud.type = "submit";
                c_btn_salud.className = "btn btn_red c_btn_salud";
                c_btn_salud.innerHTML = \'<i class="fa-solid fa-ban"></i>\';

                const s_btn5 = document.createElement("div");
                s_btn5.className = "col-6";

                const s_btn_salud = document.createElement("button");
                s_btn_salud.type = "submit";
                s_btn_salud.className = "btn btn_green s_btn_salud";
                s_btn_salud.innerHTML = \'<i class="fa-solid fa-check"></i>\';
                s_btn_salud.formAction = "edit_arbolData.php";

                const input_salud = document.createElement("select");
                input_salud.className = "form-control";
                input_salud.name = "salud"

                fetch("https://tecnica1lacosta.com.ar/ada/db_saludData.php")
                .then((res) => res.json())
                .then((data) => {
                console.log(data);
                // data = data[0];
                // console.log(data);

                data.map((salud => {
                    const o_categoria = document.createElement("option");
                    o_categoria.value = salud.id;
                    o_categoria.innerText = salud.estado;

                    input_salud.appendChild(o_categoria);
                }))
                });

                c_btn5.appendChild(c_btn_salud);
                s_btn5.appendChild(s_btn_salud);
                markerBtn5.appendChild(c_btn5);
                markerBtn5.appendChild(s_btn5);
                markerData5.appendChild(input_salud);

              })
                ';}
              ?>
              // ============ COMENTARIO ==============

              const markerData6 = document.querySelector(".markerData6");
              markerData6.innerHTML="";

              const e_comentario = document.createElement("input");
              e_comentario.type = "text";
              e_comentario.className = "form-control e_comentario";
              e_comentario.name = "e_comentario";
              e_comentario.readOnly = true;

              <?php
              if ($nivel>=2) { echo'
                const markerBtn6 = document.querySelector(".markerBtn6");
              markerBtn6.innerHTML="";

              const e_btn6 = document.createElement("div");
              e_btn6.className = "col-6";

              const e_btn_comentario = document.createElement("button");
              e_btn_comentario.type = "submit";
              e_btn_comentario.className = "btn btn_yellow e_btn_comentario";
              e_btn_comentario.innerHTML = \'<i class="fa-solid fa-pen"></i>\';


              e_btn_comentario.addEventListener( \'click\', function(){
                markerData6.innerHTML="";
                markerBtn6.innerHTML="";

                const c_btn6 = document.createElement("div");
                c_btn6.className = "col-6";

                const c_btn_comentario = document.createElement("button");
                c_btn_comentario.type = "submit";
                c_btn_comentario.className = "btn btn_red c_btn_comentario";
                c_btn_comentario.innerHTML = \'<i class="fa-solid fa-ban"></i>\';

                const s_btn6 = document.createElement("div");
                s_btn6.className = "col-6";

                const s_btn_comentario = document.createElement("button");
                s_btn_comentario.type = "submit";
                s_btn_comentario.className = "btn btn_green s_btn_comentario";
                s_btn_comentario.innerHTML = \'<i class="fa-solid fa-check"></i>\';
                s_btn_comentario.formAction = "edit_arbolData.php";

                const input_comentario = document.createElement("input");
                input_comentario.type = "text";
                input_comentario.className = "form-control input_comm";
                input_comentario.name = "comentario";

                c_btn6.appendChild(c_btn_comentario);
                s_btn6.appendChild(s_btn_comentario);
                markerBtn6.appendChild(c_btn6);
                markerBtn6.appendChild(s_btn6);
                markerData6.appendChild(input_comentario);
            }); 
                ';}
            ?>  
              // filtra el arbol
                data = data.filter(function(items){
                return (items.latitud == $lat && items.longitud == $lon);
                });
                console.log(coord[0]);
                console.log(data);

              data.map((arboles => {
              
                e_especie.value = arboles.nombre_especie;
                e_edad.value = arboles.rango;
                e_magnitud.value = arboles.tamano;
                e_copa.value = arboles.tipo;
                e_salud.value = arboles.estado;
                e_comentario.value = arboles.comentario;
                marker_number.innerText = arboles.id;
                marker_user.innerText = arboles.institucion;
                marker_eImg.setAttribute('src', arboles.imagen);
                <?php
                    if ($nivel>=2) { echo '
                        markerId1.value = arboles.id;
                        markerId2.value = arboles.id;
                        markerId3.value = arboles.id;
                        markerId4.value = arboles.id;
                        markerId5.value = arboles.id;
                        markerId6.value = arboles.id;
                        markerId99.value = arboles.id;
                        ';}
                ?>
              }))

              markerData1.appendChild(e_especie);
              markerData2.appendChild(e_edad);
              markerData3.appendChild(e_magnitud);
              markerData4.appendChild(e_copa);
              markerData5.appendChild(e_salud);
              markerData6.appendChild(e_comentario);
              <?php
              if ($nivel>=2) {echo '
                e_btn1.appendChild(e_btn_especie);
              markerBtn1.appendChild(e_btn1);
              e_btn2.appendChild(e_btn_edad);
              markerBtn2.appendChild(e_btn2);
              e_btn3.appendChild(e_btn_magnitud);
              markerBtn3.appendChild(e_btn3);
              e_btn4.appendChild(e_btn_copa)
              markerBtn4.appendChild(e_btn4);
              e_btn5.appendChild(e_btn_salud);
              markerBtn5.appendChild(e_btn5);
              e_btn6.appendChild(e_btn_comentario);
              markerBtn6.appendChild(e_btn6);
                ';}
              ?>
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