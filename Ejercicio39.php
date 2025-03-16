<?php

$archivo = 'contador.txt';


$contador = (file_exists($archivo)) ? (int)file_get_contents($archivo) : 0;


$contador++;

file_put_contents($archivo, $contador);

echo "Este es el contador de ejecuciones: $contador";
?>