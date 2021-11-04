<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
};
include 'conexion.php';

if(isset($_REQUEST['cargar'])) // when click on Update button
{
    $nombre = $_REQUEST['nombre'];
    $icon = $_REQUEST['icon'];
	$consulta ="INSERT INTO `especies` (`id`, `nombre_especie`, `imagen`) VALUES (NULL, '$nombre', '$icon')";
    $qry = mysqli_query($conn, $consulta);
	
    header("Location: usuarios_lista.php");

exit;
           	
}
?>

<form method="POST">
    <label for="nombre">Nombre de la especie</label>
    <input type="text" name="nombre"  Required>
    <div class="col-3 fileUpload btn btn-primary">
		<span><i class="fa-solid fa-camera"></i></span>
		<input id="uploadBtn_copa" type="file" class="upload" name="icon">
	</div>
    <input type="submit" name="cargar" value="Cargar">
</form>