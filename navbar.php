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
		<div class="col-6">
			<a href="index.php" class="menu_items">
					<i class="fa-solid fa-map-location-dot"></i>
					<span class="menu_text">Mapa</span>
			</a>
		</div>
		<div class="col-6">
			<a href="cargar_arbol.php" class="menu_items">
					<i class="fa-solid fa-file-arrow-up"></i>
					<span class="menu_text">Subir</span>
			</a>
		</div>
		<div class="col-6">
			<a href="#" class="menu_items">
					<i class="fa-solid fa-pen"></i>
					<span class="menu_text">Editar</span>
			</a>
		</div>
		<div class="col-6">
			<a href="enciclopedia.php" class="menu_items">
					<i class="fa-solid fa-book"></i>
					<span class="menu_text">Enciclopedia</span>
			</a>
		</div>
		<div class="col-6">
		</div>
		<div class="col-6">
			<a href="#" class="menu_items">
					<i class="fa-solid fa-right-from-bracket"></i>
					<span class="menu_text">Salir</span>
			</a>
		</div>
		<div class="col-4">
			<a href="#" class="menu_items_logos">
					<img src="img/logoalpha3.png">
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