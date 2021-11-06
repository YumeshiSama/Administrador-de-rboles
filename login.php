<?php

include 'conexion.php';

$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];
$sql = "SELECT pass, username, id FROM usuarios WHERE username='$usuario'";
$result = $conn->query($sql);

# Luego de haber obtenido los valores, ya podemos comprobar:
while($row = mysqli_fetch_array($result)) {
  echo $row['username'];
if ($palabra_secreta === $row['pass']) {

    session_start();

    $_SESSION["id_usuario"] = $row['id'];
    header("Location: index.php");
} else {
    echo "El usuario o la contraseña son incorrectos";
}}