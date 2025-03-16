<?php

$frase = "La vida es un regalo";
$letra = "a";  


$cantidad = substr_count(strtolower($frase), strtolower($letra));


echo "La letra '$letra' aparece $cantidad veces en la frase: '$frase'.";
?>