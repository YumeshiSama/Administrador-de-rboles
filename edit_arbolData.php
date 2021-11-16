<?php 
include 'conexion.php';

$id=$_REQUEST["id"];
$type=$_REQUEST["type"];

switch ($type) {
    case 1:
        $especie=$_REQUEST["especie"];
        $sql = "UPDATE arboles SET id_especie = $especie  where id=$id";
        mysqli_query($conn, $sql);
        break;
    case 2:
        $edad=$_REQUEST["edad"];
        $sql = "UPDATE arboles SET id_edad = $edad  where id=$id";
        mysqli_query($conn, $sql);
        break;
    case 3:
        $magnitud=$_REQUEST["magnitud"];
        $sql = "UPDATE arboles SET id_magnitud = $magnitud  where id=$id";
        mysqli_query($conn, $sql);
        break;
    case 4:
        $copa=$_REQUEST["copa"];
        $sql = "UPDATE arboles SET id_copa = $copa  where id=$id";
        mysqli_query($conn, $sql);
        break;
    case 5:
        $salud=$_REQUEST["salud"];
        $sql = "UPDATE arboles SET id_salud = $salud  where id=$id";
        mysqli_query($conn, $sql);
        break;
    case 6:
        $comentario=$_REQUEST["comentario"];
        $sql = "UPDATE arboles SET comentario = '$comentario'  where id=$id";
        mysqli_query($conn, $sql);
        break;
}

header("Location: index.php");

exit;