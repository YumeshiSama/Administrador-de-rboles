<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
};
include 'conexion.php';
include 'navbar.php';
$sql = "SELECT * FROM localidades ORDER BY nombre asc";
$result = $conn->query($sql);

if(isset($_REQUEST['cargar'])) // when click on Update button
{
    $username = $_REQUEST['username'];
    $institucion = $_REQUEST['institucion'];
    $pass = $_REQUEST['password'];
    $localidad = $_REQUEST['localidad'];
	$consulta ="INSERT INTO `usuarios` (`id`, `institucion`, `username`, `pass`, `id_localidad`) VALUES (NULL, '$institucion', '$username', '$pass', '$localidad')";
    $qry = mysqli_query($conn, $consulta);
    echo '<script language="javascript">alert("Cargado correctamente");window.location.href="usuarios_lista.php"</script>';

exit;
           	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
	<title>Beta_ada</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
 	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa00e73738.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="main" id="blur">
    <div class="container">
        <form method="POST">
            <label for="institucion">Institucion</label>
            <input type="text" maxlength="90" name="institucion" Required>
            <label for="username">Nombre de usuario</label>
            <input type="text" maxlength="50" name="username"  Required>
            <label for="password">Contraseña</label>
            <input type="text" maxlength="50" name="password"  Required>
            <label for="localidad">Localidad</label>
            <select class="form-control" id="localidad" name="localidad">
                <?php
                    foreach($result as $row){
                        echo '<option value="'.$row['id'].'">'.ucfirst($row['nombre']).'</option>';
                    }
                ?>
            </select>
            <input type="submit" class="btn btn-success" name="cargar" value="Cargar">
        </form>
    </div>
</div>
<script  src="js/main.js"></script>
</body>
</html>