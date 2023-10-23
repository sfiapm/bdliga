<?php  
// Preparar la sentencia SQL de eliminación
$query = "DELETE FROM JugLiga WHERE ID_Jugador = :idJugador";
$stmt = oci_parse($conn, $query);

// Asignar el valor al parámetro de la sentencia
oci_bind_by_name($stmt, ':idJugador', $idJugador);

// Ejecutar la sentencia de eliminación
$result = oci_execute($stmt);

// Verificar si la eliminación se realizó correctamente
if ($result) {
    echo "Datos eliminados correctamente.";
} else {
    $e = oci_error($stmt);
    echo "Error al eliminar los datos: " . $e['message'];
}

// Cerrar la conexión a la base de datos
oci_free_statement($stmt);
oci_close($conn);
?>