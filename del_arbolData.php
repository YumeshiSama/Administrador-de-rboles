<?php 
include 'conexion.php';

$id=$_REQUEST["id"];

$sql = "DELETE FROM `arboles` WHERE id= $id";

mysqli_query($conn,$sql);

header("Location: index.php");

exit;