<?php

$nombres = ["Sofia", "Mateo", "Luciana", "Julian", "Valeria"];


$nombre_buscado = "Mateo";  


if (in_array($nombre_buscado, $nombres)) {
    echo "El nombre '$nombre_buscado' está en la lista.";
} else {
    echo "El nombre '$nombre_buscado' no está en la lista.";
}
?>