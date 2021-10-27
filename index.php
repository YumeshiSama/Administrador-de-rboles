<!DOCTYPE html>
<html lang="en">
<head>
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
<form action="login.php" method="post">
        <!--
            Nota: el atributo name es importante, pues lo vamos a recibir de esa manera
            en PHP
        -->
        <input name="usuario" type="text" placeholder="Escribe tu nombre de usuario">
        <br><br>
        <input name="palabra_secreta" type="password" placeholder="Contraseña">
        <br><br>
        <!--Lo siguiente envía el formulario-->
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>