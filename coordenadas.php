<?php

include 'conexion.php';

if (empty($_GET["categoria"])) {
    exit("No hay categoría");
}
$categoria = $_GET["categoria"];
//$categoria="1";
//$contador=0;
$arreglo=array();
$arreglodos=array();
$var="]";

    $sql = "SELECT latitud, longitud FROM arboles WHERE id_especie='1'";
    $result = $conn->query($sql);

       while($row = mysqli_fetch_array($result)) {
           
           $arreglodos =  ["latitud" => $row["latitud"],"longitud" => $row["longitud"]];
           array_push($arreglo,$arreglodos);
            //$contador= $contador+1;
            // $pinos =[
            //             [
            //                 "latitud" => $row["latitud"],
            //                 "longitud" => $row["longitud"],
            //             ],
            //         ];
            
}


if ($categoria === "1") {
    echo json_encode([
        "icono" => "img/pino.png",
        "coordenadas" => $arreglo,
    ]);
} else {
    echo json_encode([
        "icono" => "img/alamo.png",
        "coordenadas" => $arreglo,
    ]);
}

$conn->close();