<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
};
include 'conexion.php';
$id = $_REQUEST['id'];
$sql = mysqli_query($conn, "SELECT * FROM `usuarios` where id='$id'");
$data = mysqli_fetch_array($sql);

if(isset($_REQUEST['update'])) // when click on Update button
{
    $username = $_REQUEST['username'];
    $institucion = $_REQUEST['institucion'];
    $nivel = $_REQUEST['nivel'];
    $id_localidad = $_REQUEST['id_localidad'];
	$consulta ="UPDATE `usuarios` SET `username` = '$username' , institucion = '$institucion' , id_localidad = '$id_localidad' where `id`='$id'";
    $qry = mysqli_query($conn, $consulta);
	
    header("Location: usuarios_lista.php");

exit;
           	
}
?>

<form method="POST">
  <input type="text" name="username" value="<?php echo $data['username'] ?>"  Required>
  <input type="text" name="institucion" value="<?php echo $data['institucion'] ?>"  Required>
  <input type="number" name="id_localidad" value="<?php echo $data['id_localidad'] ?>"  Required>
  <input type="submit" name="update" value="Update">
</form>