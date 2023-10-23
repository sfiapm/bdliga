<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/Style.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/animate/animate.min.css">


    
</head>
<body>
<h1>LIGA BBVA MX</h1>


<!-- Código en PHP -->
<?php
// crear conexión con Oracle
$conexion = oci_connect("system", "123456789", "localhost/xe"); 

if (!$conexion) {    
    $m = oci_error();    
    echo $m['message'], "\n";    
    exit; 
} else {    
    echo ""; 
} 
?>

<!-- Agregar enlaces a las páginas de las tablas -->
<p>EXPLORA MAS:</p>
<a href="TablasBD/tablaJugLiga.php">Ver tabla de Jugadores</a><br>
<a href="TablasBD/tabla_dt.php">Ver tabla de DT</a>

<!-- Código en PHP -->
<?php
oci_close($conexion);
?>
</body>
</html>