<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
};
include 'conexion.php';

$datename = date("Y-m-d-s-v");
$targetDir = "upl/icn/";

if(isset($_REQUEST['cargar'])) // when click on Update button
{
    $nombre = $_REQUEST['nombre'];

    $fileName = basename($_FILES["icon"]["name"]);
	$fileName=$datename.$fileName;
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

	if((!empty($_FILES["icon"]["name"]))){
		// Allow certain file formats
		$allowTypes = array('jpg','png','jpeg');
		if ((!file_exists($targetFilePath))) {
			if((in_array($fileType, $allowTypes))){
				if((move_uploaded_file($_FILES["icon"]["tmp_name"], $targetFilePath))){	
					$consulta ="INSERT INTO `especie` (`id`, `nombre_especie`, `imagen`) VALUES (NULL, '$nombre', 'upl/icn/$fileName')";
                    $qry = mysqli_query($conn, $consulta);
                }
			}
		}
	}




    
    //$icon = $_REQUEST['icon'];
	// $consulta ="INSERT INTO `especies` (`id`, `nombre_especie`, `imagen`) VALUES (NULL, '$nombre', '$icon')";
    // $qry = mysqli_query($conn, $consulta);
	
    header("Location: usuarios_lista.php");

exit;
           	
}
?>

<form class="multisteps-form__form" method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre de la especie</label>
    <input type="text" name="nombre"  Required>
    <div class="col-3 fileUpload btn btn-primary">
		<span><i class="fa-solid fa-camera"></i></span>
		<input id="uploadBtn_copa" type="file" class="upload" name="icon">
	</div>
    <input type="submit" name="cargar" value="Cargar">
</form>