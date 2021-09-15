<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Alpha</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/ol.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="build/ol.js"></script>
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList"></script>
</head>
<body>


   <main role="main" class="container-fluid">
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="form-group">
                        <label for="selectCategorias">Categoría:</label>
                        <select class="form-control" id="selectCategorias">
                            <option value="veterinarias">Pinos </option>
                            <option value="pizzerias">Alamos</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div id="mapa" class="mapa"></div>
                </div>
            </div>
        </main>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>