<?php 
function mostrar_salud() {
    include 'conexion.php';
    $sql = "SELECT salud.id, salud.estado FROM salud";
    $results_array = array();
    $resultado = $conn->query($sql);

    while ($row = $resultado->fetch_assoc()) {
        $results_array[] = $row;
    }
    return json_encode($results_array);

    mysqli_close($conn);
}

echo mostrar_salud();