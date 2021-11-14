<?php
function mostrar_arboles() {
    include 'conexion.php';
    $sql = "SELECT arboles.id, arboles.id_usuario, arboles.id_edad, arboles.id_magnitud, arboles.extraible, arboles.poda, arboles.peligro_de_caida, arboles.id_copa, arboles.id_salud, arboles.id_localidad, arboles.id_especie, arboles.latitud, arboles.longitud, arboles.fecha_carga, arboles.foto_tronco, arboles.foto_copa, arboles.distancia_prox, arboles.comentario, copa.tipo, edad.rango, especie.nombre_especie, especie.imagen, localidades.nombre, magnitud.tamano, salud.estado, usuarios.institucion FROM arboles LEFT JOIN copa ON arboles.id_copa = copa.id LEFT JOIN edad ON arboles.id_edad = edad.id LEFT JOIN especie ON arboles.id_especie = especie.id LEFT JOIN localidades ON arboles.id_localidad = localidades.id LEFT JOIN magnitud ON arboles.id_magnitud = magnitud.id LEFT JOIN salud ON arboles.id_salud = salud.id LEFT JOIN usuarios ON arboles.id_usuario = usuarios.id";
    $results_array = array();
    $resultado = $conn->query($sql);
    // $row= $resultado -> fetch_all(MYSQLI_ASSOC);
    // return json_encode($row);
    // $row = $resultado -> fetch_array(MYSQLI_ASSOC);
    // return json_encode($row);

    while ($row = $resultado->fetch_assoc()) {
        $results_array[] = $row;
    }
    return json_encode($results_array);

    mysqli_close($conn);
}
    echo mostrar_arboles();
