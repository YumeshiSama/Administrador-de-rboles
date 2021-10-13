<?php

include 'conexion.php';

if (empty($_GET["categoria"])) {
    exit("No hay categoría");
}

$categoria = $_GET["categoria"];

    $sql = "SELECT latitud, longitud FROM arboles WHERE id_especie='1'";
    $result = $conn->query($sql);

       while($row = mysqli_fetch_array($result)) {

    $pinos = [
        [
            "latitud" => $row["latitud"],
            "longitud" => $row["longitud"],
        ],
    ];
}

if ($categoria === "1") {
    echo json_encode([
        "icono" => "img/pino.png",
        "coordenadas" => $pinos,
    ]);
} else {
    echo json_encode([
        "icono" => "img/alamo.png",
        "coordenadas" => $alamos,
    ]);
}

$conn->close();