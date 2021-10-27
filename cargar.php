<?php
session_start();

include "conexion.php";
$id_usuario=$_SESSION["id_usuario"];
$edad=$_REQUEST["edad"];
$extraccion=$_REQUEST["extraccion"];
$magnitud=$_REQUEST["magnitud"];
$copa = $_REQUEST["copa"];
$salud=$_REQUEST["salud"];
$especie = $_REQUEST["especie"];
$poda = $_REQUEST["poda"];
$caida=$_REQUEST["caida"];
$distancia=$_REQUEST["distancia_arbol"];
$latitud = $_REQUEST["latitud"];
$longitud = $_REQUEST["longitud"];
$date = date("Y-m-d");
$comentario = $_REQUEST["detalles_extraccion"];

$foto_tronco=0;
$foto_copa=0;

$sql = "INSERT INTO `arboles` (`id`, `id_usuario`, `id_edad`, `id_magnitud`, `extraible`, `poda`, `peligro_de_caida`, `id_copa`, `id_salud`, `id_localidad`, `id_especie`, `latitud`, `longitud`, `fecha_carga`, `foto_tronco`, `foto_copa`, `distancia_prox`, `comentario`) VALUES (NULL, '$id_usuario', '$edad', '$magnitud', '$extraccion', '$poda', '$caida', '$copa', '$salud', '0', '$especie', '$latitud', '$longitud', '$date', '$foto_tronco', '$foto_copa', '$distancia', '$comentario')";

//$sql = "INSERT INTO `arboles` (`id`, `id_usuario`, `id_edad`, `id_extraccion`, `id_magnitud`, `id_columnar`, `id_copa`, `id_salud`, `id_localidad`, `id_especie`, `latitud`, `longitud`, `fecha_carga`, `foto_tronco`, `foto_copa`, `distancia_prox`, `comentario`) VALUES (NULL, '$id_usuario', '$edad', '$extraccion', '$magnitud', '$columnar', '$copa', '$salud', '$localidad', '$especie', '$latitud', '$longitud', '$date', '$foto_tronco', '$foto_copa', '$distancia', '$comentario')";

mysqli_query($conn,$sql);

header("Location: map.php");

exit;