<?php

include 'conexion.php';

if (empty($_GET["categoria"])) {
    exit("No hay categoría");
}
$categoria = $_GET["categoria"];
$arreglo=array();
$arreglodos=array();
$imagen="";
if ($categoria==="1") {
    $sql = "SELECT latitud, longitud FROM arboles";
    $sqlimg = "SELECT imagen FROM especie WHERE id=$categoria";
    $resultimg = $conn->query($sqlimg);
    while($rowimg = mysqli_fetch_array($resultimg)) {
        $imagen =  [$rowimg["imagen"]];  
    }
    $result = $conn->query($sql);
       while($row = mysqli_fetch_array($result)) {
           
           $arreglodos =  ["latitud" => $row["latitud"],"longitud" => $row["longitud"]];
           array_push($arreglo,$arreglodos);    
    }
} else {
    $sql = "SELECT latitud, longitud FROM arboles WHERE id_especie=$categoria";
    $sqlimg = "SELECT imagen FROM especie WHERE id=$categoria";
    $resultimg = $conn->query($sqlimg);
    while($rowimg = mysqli_fetch_array($resultimg)) {
        $imagen =  [$rowimg["imagen"]];  
    }
    $result = $conn->query($sql);
       while($row = mysqli_fetch_array($result)) {
           
           $arreglodos =  ["latitud" => $row["latitud"],"longitud" => $row["longitud"]];
           array_push($arreglo,$arreglodos);    
    }
}

echo json_encode([
    "icono" => $imagen,
    "coordenadas" => $arreglo,
]);

$conn->close();