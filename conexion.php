<?php  
$conexion = mysqli_connect('localhost','root','','ada');
if(!$conexion)
{
    die("Falló la conexión a la base de datos: " . mysqli_connect_error());
}
?>