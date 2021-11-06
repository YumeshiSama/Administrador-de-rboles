<?php 
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
};
include 'conexion.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM `usuarios` WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
};

if ($query_does_not_execute) {
    $errcode = "Hubo un error al eliminar";
}

$referer = $_SERVER['HTTP_REFERER'];

if ($errcode) {
    if (strpos($referer, '?') === false) {
        $referer .= "?";
    }

    header("Location: $referer&$errcode");
} else {
    header("Location: $referer");
}
exit;
?>