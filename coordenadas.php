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

    $sql = "SELECT latitud, longitud FROM arboles WHERE id_especie=$categoria";
    $result = $conn->query($sql);
       while($row = mysqli_fetch_array($result)) {
           
           $arreglodos =  ["latitud" => $row["latitud"],"longitud" => $row["longitud"]];
           array_push($arreglo,$arreglodos);    
}


// if ($categoria === "1") {
//     echo json_encode([
//         "icono" => "img/pino.png",
//         "coordenadas" => $arreglo,
//     ]);
// } else {
//     echo json_encode([
//         "icono" => "img/alamo.png",
//         "coordenadas" => $arreglo,
//     ]);
// }
switch ($categoria) {
    case 1:
        echo json_encode([
            "icono" => "img/pino.png",
            "coordenadas" => $arreglo,
        ]);
        break;
    case 2:
        echo json_encode([
            "icono" => "img/alamo.png",
            "coordenadas" => $arreglo,
        ]);
        break;
    case 3:
         echo json_encode([
            "icono" => "https://via.placeholder.com/150.png",
            "coordenadas" => $arreglo,
        ]); 
        break;
    case 4:
        echo json_encode([
            "icono" => "https://via.placeholder.com/150.png",
            "coordenadas" => $arreglo,
        ]);
        break;
        case 5:
            echo json_encode([
                "icono" => "img/pino.png",
                "coordenadas" => $arreglo,
            ]);
            break;
        case 6:
            echo json_encode([
                "icono" => "img/alamo.png",
                "coordenadas" => $arreglo,
            ]);
            break;
        case 7:
             echo json_encode([
                "icono" => "https://via.placeholder.com/150.png",
                "coordenadas" => $arreglo,
            ]); 
            break;
        case 8:
            echo json_encode([
                "icono" => "https://via.placeholder.com/150.png",
                "coordenadas" => $arreglo,
            ]);
            break;
            case 9:
                echo json_encode([
                   "icono" => "https://via.placeholder.com/150.png",
                   "coordenadas" => $arreglo,
               ]); 
               break;
           case 10:
               echo json_encode([
                   "icono" => "https://via.placeholder.com/150.png",
                   "coordenadas" => $arreglo,
               ]);
               break;
        
}


$conn->close();