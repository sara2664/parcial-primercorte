<?php
function calcularDistancia($x1, $y1, $x2, $y2) {
    // Fórmula de la distancia: d = sqrt((x2 - x1)² + (y2 - y1)²)
    $distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    return $distancia;
}


$x1 = 3;
$y1 = 4;
$x2 = 7;
$y2 = 1;


$resultado = calcularDistancia($x1, $y1, $x2, $y2);

echo "La distancia entre los puntos ($x1, $y1) y ($x2, $y2) es: " . round($resultado, 2);
?>
