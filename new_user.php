<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
};
include 'conexion.php';

if(isset($_REQUEST['cargar'])) // when click on Update button
{
    $username = $_REQUEST['username'];
    $institucion = $_REQUEST['institucion'];
    $pass = $_REQUEST['password'];
    $id_localidad = $_REQUEST['id_localidad'];
	$consulta ="INSERT INTO `usuarios` (`id`, `institucion`, `username`, `pass`, `id_localidad`) VALUES (NULL, '$institucion', '$username', '$pass', '$id_localidad')";
    $qry = mysqli_query($conn, $consulta);
	
    header("Location: usuarios_lista.php");

exit;
           	
}
?>

<form method="POST">
    <label for="institucion">Institucion</label>
    <input type="text" name="institucion" Required>
    <label for="username">Nombre de usuario</label>
    <input type="text" name="username"  Required>
    <label for="password">Contraseña</label>
    <input type="text" name="password"  Required>
    <label for="id_localidad">Localidad</label>
    <input type="number" name="id_localidad" Required>
    <input type="submit" name="cargar" value="Cargar">
</form>