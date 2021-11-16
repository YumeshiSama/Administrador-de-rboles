<?php

include 'conexion.php';

if (empty($_GET["categoria"])) {
    exit("No hay categoría");
}
$categoria = $_GET["categoria"];
$arreglo=array();
$arreglodos=array();
$arreglotres=array();
$arreglocuatro=array();
$imagen="";
$arregloimagen=array();
$arregloimagendos=array();



if ($categoria=="1") {
    $sql = "SELECT arboles.latitud, arboles.longitud, especie.imagen FROM arboles left join especie on arboles.id_especie=especie.id";
    $sqlimagen = "SELECT imagen FROM especie where id='$categoria'";
    $resultimagen = $conn->query($sqlimagen);
    $result = $conn->query($sql);

       while($row = mysqli_fetch_array($result)) {
            $arregloimagendos =  $row["imagen"];
            array_push($arregloimagen,$arregloimagendos);
            $arreglodos =  ["latitud" => $row["latitud"],"longitud" => $row["longitud"]];
            array_push($arreglo,$arreglodos);
            // $arreglotres= ([
            //     "icono" => $arregloimagendos,
            //     "coordenadas" => $arreglodos,
            // ]);
            // array_push($arreglocuatro,$arreglotres);
    }
} else {
    $sql = "SELECT arboles.latitud, arboles.longitud, especie.imagen FROM arboles left join especie on arboles.id_especie=especie.id WHERE arboles.id_especie=$categoria";
    $result = $conn->query($sql);
       while($row = mysqli_fetch_array($result)) {
        $arregloimagendos =  $row["imagen"];
        array_push($arregloimagen,$arregloimagendos);
            $arreglodos =  ["latitud" => $row["latitud"],"longitud" => $row["longitud"]];
            array_push($arreglo,$arreglodos);    
    }
}
if ($categoria=="1") {
    echo json_encode([
        //$arreglo
        "icono" => $arregloimagen,
        "coordenadas" => $arreglo,
    ]);
} else {
    echo json_encode([
        "icono" => $arregloimagen,
        "coordenadas" => $arreglo,
    ]);
}

$conn->close();