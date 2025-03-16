<?php

$candidatos = ["Gabriel", "Valeria", "Sebastian", "Isabella"];


$votos = [0, 0, 0, 0];

for ($i = 0; $i < 10; $i++) {
    
    $voto_aleatorio = rand(0, 3); 
    $votos[$voto_aleatorio]++; 
}


echo "Resultados de la votación:<br>";
for ($i = 0; $i < count($candidatos); $i++) {
    echo $candidatos[$i] . ": " . $votos[$i] . " votos<br>";
}
?>