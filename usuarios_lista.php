<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
	<title>Beta_ada</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/ol.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa00e73738.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="build/ol.js"></script>
</head>
<body>
<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
}
?>
</body>
</html>