<?php

$limite = 100;


$num1 = 0;
$num2= 1;

echo "$num1, $num2";


while ($num1 <= $limite) {
    $num3 = $num1 + $num2;
    if ($num3 > $limite) break;
    echo ", $num3";
    $num1 = $num2;
    $num2= $num3;
}
?>