<?php
// Calificación de ejemplo (se puede cambiar)
$calificacion = rand (1, 100);


if ($calificacion >= 90) {
    echo "Calificación: $calificacion <br>";
    echo "Resultado: Sobresaliente <br>";
} else if ($calificacion >= 80) {
    echo "Calificación: $calificacion <br>";
    echo "Resultado: Notable <br>";
} else if ($calificacion >= 70) {
    echo "Calificación: $calificacion <br>";
    echo "Resultado: Aprobado <br>";
} else if ($calificacion >= 60) {
    echo "Calificación: $calificacion <br>";
    echo "Resultado: Suficiente <br>";
} else {
    echo "Calificación: $calificacion <br>";
    echo "Resultado: Reprobado <br>";
}
?>
