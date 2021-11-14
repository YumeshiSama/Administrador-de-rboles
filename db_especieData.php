<?php 
function mostrar_especies() {
    include 'conexion.php';
    $sql = "SELECT especie.id, especie.nombre_especie FROM especie";
    $results_array = array();
    $resultado = $conn->query($sql);

    while ($row = $resultado->fetch_assoc()) {
        $results_array[] = $row;
    }
    return json_encode($results_array);

    mysqli_close($conn);
}

echo mostrar_especies();