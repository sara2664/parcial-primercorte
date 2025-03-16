<?php

function esPalindromo($palabra) {
  
    $palabra = strtolower(str_replace(' ', '', $palabra));

   
    $palabraInvertida = strrev($palabra);

if ($palabra === $palabraInvertida) {
        return true;
    } else {
        return false;
    }
}

$palabra = "reconocer"; 
if (esPalindromo($palabra)) {
    echo "La palabra '$palabra' es un palíndromo.";
} else {
    echo "La palabra '$palabra' no es un palíndromo.";
}
?>