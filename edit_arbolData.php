<?php 
include 'conexion.php';

$id=$_REQUEST["id"];
$type=$_REQUEST["type"];

switch ($type) {
    case 1:
        $especie=$_REQUEST["especie"];
        $sql = "UPDATE `arboles` SET `id_especie` = `$especie`  where `id`=`$id`";
        mysqli_query($conn, $sql);
        break;
    case 2:
        $edad=$_REQUEST["edad"];
        echo $edad;
        break;
    case 3:
        $magnitud=$_REQUEST["magnitud"];
        echo $magnitud;
        break;
    case 4:
        $copa=$_REQUEST["copa"];
        echo $copa;
        break;
    case 5:
        $salud=$_REQUEST["salud"];
        echo $salud;
        break;
    case 6:
        $comentario=$_REQUEST["comentario"];
        echo $comentario;
        break;
}

// header("Location: index.php");

// exit;