<?php

include 'conexion.php';
$id=$_SESSION['id_usuario'];
$sql = "SELECT nivel FROM usuarios WHERE id='$id'";
$result = $conn->query($sql);
$nivel="";
while($row = mysqli_fetch_array($result)) {
	$nivel = $row['nivel'];
}
?>
<nav class="nav">
	<a href="#" onclick="toggle()" class="nav_items">
		<i class="fa-solid fa-caret-up"></i>
		<span class="nav_text">Menu</span>
	</a>
</nav>
<!--==================================
				MENU LIST
===================================-->
<div class="menu fadeInUp inactive" id="menu">
	<div class="row">
		<div class="col-6 col-lg-3 col-sm-3">
			<a href="map.php" class="menu_items">
					<i class="fa-solid fa-map-location-dot"></i>
					<span class="menu_text">Mapa</span>
			</a>
		</div>
		<?php 
			if ($nivel>=1){
				echo '<div class="col-6 col-lg-3 col-sm-3">
				<a href="cargar_arbol.php" class="menu_items">
						<i class="fa-solid fa-file-arrow-up"></i>
						<span class="menu_text">Subir</span>
				</a>
			</div>';
			}
		?>
		<?php 
			if ($nivel>=5){
			echo '<div class="col-6 col-lg-3 col-sm-3">
				<a href="usuarios_lista.php" class="menu_items">
						<i class="fa-solid fa-pen"></i>
						<span class="menu_text">Usuarios</span>
				</a>
			</div>';
		}
		?>
		<div class="col-6 col-lg-3 col-sm-3">
			<a href="enciclopedia.php" class="menu_items">
					<i class="fa-solid fa-book"></i>
					<span class="menu_text">Referencia</span>
			</a>
		</div>
		<div class="col-6 col-lg-9 col-sm-9">
		</div>
		<?php 
			if ($id){
		echo '<div class="col-6 col-lg-3 col-sm-3">
			<a href="logout.php" class="menu_items">
					<i class="fa-solid fa-right-from-bracket"></i>
					<span class="menu_text">Salir</span>
			</a>
			</div>';
	} else {
		echo '<div class="col-6 col-lg-3 col-sm-3">
			<a href="login.php" class="menu_items">
					<i class="fa-solid fa-right-from-bracket"></i>
					<span class="menu_text">Salir</span>
			</a>
			</div>';
	}
	?>
		<div class="col-4">
			<a href="#" class="menu_items_logos">
					<img src="img/logoalpha1.png">
			</a>
		</div>
		<div class="col-4">
			<a href="#" class="menu_items_logos la_costa">
					<img src="img/lacosta2.png">
			</a>
		</div>
		<div class="col-4">
			<a href="#" class="menu_items_logos">
					<img src="img/tecnica.png">
			</a>
		</div>
	</div>				
</div>
<!--==================================
			MENU SCRIPT
===================================-->
<script type="text/javascript">
	function toggle(){
	var blur = document.getElementById('blur');
	blur.classList.toggle('active');
	var menu = document.getElementById('menu');
	menu.classList.toggle('active');
	var menu = document.getElementById('menu');
	menu.classList.toggle('inactive');
}
</script>