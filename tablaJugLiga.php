<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JugLiga</title>
    <link rel="stylesheet" href="CSS/Normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>

<h2>Eliminar Datos de Jugador</h2>
<form action="procesoEliminar.php" method="post">
    <label for="jugadorID_eliminar">JugadorID a Eliminar:</label><br>
    <input type="text" id="jugadorID_eliminar" name="jugadorID_eliminar"><br><br>
    <input type="submit" value="Eliminar Datos">
</form>

<h2>Ingresar Datos de Jugador</h2>
    <form action="procesoInsertar .php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apell_pat">Apellido Paterno:</label><br>
        <input type="text" id="apellidoPaterno" name="apellidoPaterno"><br>
        <label for="apell_mat">Apellido Materno:</label><br>
        <input type="text" id="apellidoMaterno" name="apellidoMaterno"><br>
        <label for="lugar_nacimiento">Lugar de Nacimiento:</label><br>
        <input type="text" id="lugarNacimiento" name="lugarNacimiento"><br>
        <label for="lugar_nacimiento">Apodo:</label><br>
        <input type="text" id="apodo" name="apodo"><br>
        <label for="no_playera">Número de Camiseta:</label><br>
        <input type="text" id="numeroCamiseta" name="numeroCamiseta"><br>
        <label for="posicion_c">Posición:</label><br>
        <input type="text" id="posicion" name="posicion"><br>
        <label for="edad">Edad:</label><br>
        <input type="text" id="edad" name="edad"><br>
        <label for="precio_jug">Precio de Transferencia:</label><br>
        <input type="text" id="precioTransferencia" name="precioTransferencia"><br>
        <label for="ID_equipo">ID de Equipo:</label><br>
        <input type="text" id="equipoID" name="equipoID"><br><br>
        <input type="submit" value="Insertar Datos">
    </form>

<?php  
// crear conexión con Oracle
$conexion = oci_connect("system", "123456789", "localhost/xe"); 

if (!$conexion) {    
    $m = oci_error();    
    echo $m['message'], "\n";    
    exit; 
} 

// Mostrar los datos de la tabla 'Jugadores'
$stid = oci_parse($conexion, 'SELECT * FROM JugLiga');
oci_execute($stid);

echo "<h2>Datos de la tabla Jugadores:</h2>";
echo "<table>";
while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
    echo "<tr>";
    foreach ($row as $item) {
        echo "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

oci_free_statement($stid);
oci_close($conexion);
?>
</body>
</html>