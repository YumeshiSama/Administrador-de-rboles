<?php 
function mostrar_magnitud() {
    include 'conexion.php';
    $sql = "SELECT magnitud.id, magnitud.tamano FROM magnitud";
    $results_array = array();
    $resultado = $conn->query($sql);

    while ($row = $resultado->fetch_assoc()) {
        $results_array[] = $row;
    }
    return json_encode($results_array);

    mysqli_close($conn);
}

echo mostrar_magnitud();