<?php
$a = rand(1,10);
echo "El primer cateto es: ";
echo "$a","<br>";

$b = rand(11,20);
echo "El segundo cateto: ";
echo "$b","<br>";

$hipotenusa = sqrt(pow($a, 2) + pow($b, 2));


echo "La hipotenusa del triángulo es: " . $hipotenusa . "\n";
?>