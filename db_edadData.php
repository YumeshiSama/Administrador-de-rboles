<?php 
function mostrar_edades() {
    include 'conexion.php';
    $sql = "SELECT edad.id, edad.rango FROM edad";
    $results_array = array();
    $resultado = $conn->query($sql);

    while ($row = $resultado->fetch_assoc()) {
        $results_array[] = $row;
    }
    return json_encode($results_array);

    mysqli_close($conn);
}

echo mostrar_edades();