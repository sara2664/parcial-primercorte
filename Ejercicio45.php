<?php
// Datos de los estudiantes
$nombre1 = "Ana";
$edad1 = 20;
$calificacion1 = 85;

$nombre2 = "Carlos";
$edad2 = 22;
$calificacion2 = 90;

$nombre3 = "Elena";
$edad3 = 21;
$calificacion3 = 78;

$nombre4 = "Luis";
$edad4 = 23;
$calificacion4 = 95;


$cantidad = 4;

$promedioEdad = ($edad1 + $edad2 + $edad3 + $edad4) / $cantidad;


$promedioCalificacion = ($calificacion1 + $calificacion2 + $calificacion3 + $calificacion4) / $cantidad;


echo "Lista de Estudiantes: <br>";
echo "$nombre1, Edad: $edad1, Calificación: $calificacion1 <br>";
echo "$nombre2, Edad: $edad2, Calificación: $calificacion2 <br>";
echo "$nombre3, Edad: $edad3, Calificación: $calificacion3 <br>";
echo "$nombre4, Edad: $edad4, Calificación: $calificacion4 <br><br>";


echo "Resumen: <br>";
echo "Cantidad de estudiantes: $cantidad <br>";
echo "Edad promedio: $promedioEdad <br>";
echo "Calificación promedio: $promedioCalificacion";
?>

