<?php
function mostrar_productos() {
    include 'conexion.php';
    $sql = "SELECT arboles.id, arboles.id_usuario, arboles.id_edad, arboles.id_magnitud, arboles.extraible, arboles.poda, arboles.peligro_de_caida, arboles.id_columnar, arboles.id_copa, arboles.id_salud, arboles.id_localidad, arboles.id_especie, arboles.latitud, arboles.longitud, arboles.fecha_carga, arboles.foto_tronco, arboles.foto_copa, arboles.distancia_prox, arboles.comentario, copa.tipo, edad.rango, especie.nombre_especie, localidades.nombre, magnitud.tamano, salud.estado, usuario.institucion FROM arboles LEFT JOIN categoria ON productos.id_categoria = categoria.id LEFT JOIN marca ON productos.id_marca = marca.id LEFT JOIN area ON productos.id_area = area.id";
    $resultado = mysqli_query($conexion,$sql);
    $row= $resultado->fetch_all(1);
    return json_encode($row);
}
