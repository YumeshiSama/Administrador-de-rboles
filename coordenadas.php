<?php

include 'conexion.php';

if (empty($_GET["categoria"])) {
    exit("No hay categoría");
}
$categoria = $_GET["categoria"];
$arreglo=array();
$arreglodos=array();
$imagen="";
$arregloimagen=array();
$arregloimagendos=array();
if ($categoria=="1") {
    $sql = "SELECT arboles.latitud, arboles.longitud, especie.imagen FROM arboles left join especie on arboles.id_especie=especie.id";

    $result = $conn->query($sql);
       while($row = mysqli_fetch_array($result)) {
            $arregloimagendos =  [$row["imagen"]];
            array_push($arregloimagen,$arregloimagendos);
            $arreglodos =  ["latitud" => $row["latitud"],"longitud" => $row["longitud"]];
            array_push($arreglo,$arreglodos);    
    }
} else {
    $sql = "SELECT arboles.latitud, arboles.longitud, especie.imagen FROM arboles left join especie on arboles.id_especie=especie.id WHERE arboles.id_especie=$categoria";
    $result = $conn->query($sql);
       while($row = mysqli_fetch_array($result)) {
            $imagen =  [$row["imagen"]];
            $arreglodos =  ["latitud" => $row["latitud"],"longitud" => $row["longitud"]];
            array_push($arreglo,$arreglodos);    
    }
}
if ($categoria=="1") {
    echo json_encode([
        "icono" => $arregloimagen,
        "coordenadas" => $arreglo,
    ]);
} else {
    echo json_encode([
        "icono" => $imagen,
        "coordenadas" => $arreglo,
    ]);
}

$conn->close();