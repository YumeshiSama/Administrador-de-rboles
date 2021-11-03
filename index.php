<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
	<title>Beta_ada</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa00e73738.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="login_box jumbotron">
                <div class="col-10 col-lg-4 m-auto card shadow-sm p-3 rounded">
                    <div class="login_l m-auto mb-2">
                        <img src="img/logoalpha3.png">
                    </div>
                    <form action="login.php" method="post">
                        <!--
                            Nota: el atributo name es importante, pues lo vamos a recibir de esa manera
                            en PHP
                        -->
                        <br>
                        <input class="form-control" name="usuario" type="text" placeholder="Usuario">
                        <br>
                        <input class="form-control" name="palabra_secreta" type="password" placeholder="Contraseña">
                        <br>
                        <!--Lo siguiente envía el formulario-->
                        <input class="btn btn-primary mb-4" type="submit" value="Iniciar sesión">
                    </form>
                    <div class="row">
                        <div class="col-6">
                            <div class="l_logo l_lacosta">
                                <img src="img/lacosta2.png">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="l_logo">
                                <img src="img/tecnica.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>