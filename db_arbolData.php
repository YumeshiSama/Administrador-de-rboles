<?php
function mostrar_productos() {
    include 'conexion.php';
    $sql = "SELECT arboles.id, arboles.id_usuario, arboles.id_edad, arboles.id_magnitud,  FROM arboles LEFT JOIN categoria ON productos.id_categoria = categoria.id LEFT JOIN marca ON productos.id_marca = marca.id LEFT JOIN area ON productos.id_area = area.id";
    $resultado = mysqli_query($conexion,$sql);
    $row= $resultado->fetch_all(1);
    return json_encode($row);
}
