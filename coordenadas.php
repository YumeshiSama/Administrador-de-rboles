<?php
if (empty($_GET["categoria"])) {
    exit("No hay categoría");
}

$categoria = $_GET["categoria"];
#TODO: hacerlo en una BD
$pinos = [
    [
        "latitud" => -36.5311294868868,
        "longitud" => -56.71174973909938,
    ],
    [
        "latitud" => -36.5311394868868,
        "longitud" => -56.71144973909938,
    ],
    [
        "latitud" => -36.5311498968868,
        "longitud" => -56.71404973909938,
    ],
];
$alamos = [
    [
        "latitud" => -36.5311294868868,
        "longitud" => -56.71174973909938,
    ],
    [
        "latitud" => -36.5311294868868,
        "longitud" => -56.71144973909938,
    ],
    [
        "latitud" => -36.5311295868868,
        "longitud" => -56.71143973909938,
    ],
];

if ($categoria === "pinos") {
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