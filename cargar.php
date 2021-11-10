<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
};
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
$datename = date("Y-m-d-s-v");
$comentario = $_REQUEST["detalles_extraccion"];

    $targetDir = "upl/img/";

	$fileNameCopa = basename($_FILES["copa"]["name"]);
	$fileNameCopa=$datename.$fileNameCopa;
	$targetFilePathCopa = $targetDir . $fileNameCopa;
	$fileTypeCopa = pathinfo($targetFilePathCopa,PATHINFO_EXTENSION);

	$fileNameTronco = basename($_FILES["tronco"]["name"]);
	$fileNameTronco=$datename.$fileNameTronco;
	$targetFilePathTronco = $targetDir . $fileNameTronco;
	$fileTypeTronco = pathinfo($targetFilePathTronco,PATHINFO_EXTENSION);

	if((!empty($_FILES["copa"]["name"])) && (!empty($_FILES["tronco"]["name"]))){
		// Allow certain file formats
		$allowTypes = array('jpg','png','jpeg');
		if ((!file_exists($targetFilePathCopa)) && (!file_exists($targetFilePathTronco))) {
			if((in_array($fileTypeCopa, $allowTypes)) && (in_array($fileTypeTronco, $allowTypes))){
				if((move_uploaded_file($_FILES["copa"]["tmp_name"], $targetFilePathCopa)) && (move_uploaded_file($_FILES["tronco"]["tmp_name"], $targetFilePathTronco))){		
					$sql = "INSERT INTO `arboles` (`id`, `id_usuario`, `id_edad`, `id_magnitud`, `extraible`, `poda`, `peligro_de_caida`, `id_copa`, `id_salud`, `id_localidad`, `id_especie`, `latitud`, `longitud`, `fecha_carga`, `foto_tronco`, `foto_copa`, `distancia_prox`, `comentario`) VALUES (NULL, '$id_usuario', '$edad', '$magnitud', '$extraccion', '$poda', '$caida', '$copa', '$salud', '0', '$especie', '$latitud', '$longitud', '$date', 'upl/img/$fileNameTronco', 'upl/img/$fileNameCopa', '$distancia', '$comentario')";
                    mysqli_query($conn,$sql);
                }
			}
		}
	}
    
header("Location: index.php");

exit;