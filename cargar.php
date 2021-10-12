<?php
include "conexion.php";
$especie = $_REQUEST["especie"];
$copa = $_REQUEST["copa"];
$magnitud = $_REQUEST["magnitud"];
$poda = $_REQUEST["poda"];
$salud=$_REQUEST["salud"];
$edad=$_REQUEST["edad"];
$caida=$_REQUEST["caida"];
$extraccion=$_REQUEST["extraccion"];
$distancia=$_REQUEST["distancia_arbol"];
$latitud = $_REQUEST["latitud"];
$longitud = $_REQUEST["longitud"];
$date = date("Y-m-d");
$comentario = $_REQUEST["detalles_extraccion"];

$foto_tronco=0;
$foto_copa=0;
$id_usuario=0;

$sql = "INSERT INTO `arboles` (`id`, `id_usuario`, `id_edad`, `id_magnitud`, `extraible`, `poda`, `peligro_de_caida`, `id_copa`, `id_salud`, `id_localidad`, `id_especie`, `latitud`, `longitud`, `fecha_carga`, `foto_tronco`, `foto_copa`, `distancia_prox`, `comentario`) VALUES (NULL, '$id_usuario', '$edad', '$magnitud', '$extraccion', '$poda', '$caida', '$copa', '$salud', '0', '$especie', '$latitud', '$longitud', '$date', '$foto_tronco', '$foto_copa', '$distancia', '$comentario')";
mysqli_query($conn,$sql);

header("Location: index.php");
exit;