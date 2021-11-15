<?php 
function mostrar_copas() {
    include 'conexion.php';
    $sql = "SELECT copa.id, copa.tipo FROM copa";
    $results_array = array();
    $resultado = $conn->query($sql);

    while ($row = $resultado->fetch_assoc()) {
        $results_array[] = $row;
    }
    return json_encode($results_array);

    mysqli_close($conn);
}

echo mostrar_copas();