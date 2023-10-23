<?php  
// Preparar la sentencia SQL de inserción
$query = "INSERT INTO JugLiga (ID_Jugador, Nombre, A_Paterno, A_Materno, Edad, Posicion, Apodo, LugarNacimiento, No_Camisa, PrecioMercado_Euros, ID_DT, ID_equipo) 
          VALUES (:idJugador, :nombre, :aPaterno, :aMaterno, :edad, :posicion, :apodo, :lugarNacimiento, :noCamisa, :precioMercado, :idDT, :idEquipo)";
$stmt = oci_parse($conn, $query);

// Asignar los valores a los parámetros de la sentencia
oci_bind_by_name($stmt, ':idJugador', $idJugador);
oci_bind_by_name($stmt, ':nombre', $nombre);
oci_bind_by_name($stmt, ':aPaterno', $aPaterno);
oci_bind_by_name($stmt, ':aMaterno', $aMaterno);
oci_bind_by_name($stmt, ':edad', $edad);
oci_bind_by_name($stmt, ':posicion', $posicion);
oci_bind_by_name($stmt, ':apodo', $apodo);
oci_bind_by_name($stmt, ':lugarNacimiento', $lugarNacimiento);
oci_bind_by_name($stmt, ':noCamisa', $noCamisa);
oci_bind_by_name($stmt, ':precioMercado', $precioMercado);
oci_bind_by_name($stmt, ':idDT', $idDT);
oci_bind_by_name($stmt, ':idEquipo', $idEquipo);

// Ejecutar la sentencia de inserción
$result = oci_execute($stmt);

// Verificar si la inserción se realizó correctamente
if ($result) {
    echo "Datos insertados correctamente.";
} else {
    $e = oci_error($stmt);
    echo "Error al insertar los datos: " . $e['message'];
}

// Cerrar la conexión a la base de datos
oci_free_statement($stmt);
oci_close($conn);
?>