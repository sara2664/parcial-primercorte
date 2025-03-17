<?php
$num1 = rand(0,100);
echo "El primer número: ";
echo "$num1","<br>";

$num2 = rand(0,100);
echo "El segundo número: ";
echo "$num2","<br>";

$num3 = rand(0,100);
echo "Ingrese el tercer número: ";
echo "$num3","<br>";

if ($num1 >= $num2 && $num1 >= $num3) 
	{
	    echo "El número mayor es: " . $num1 . "\n";
	} 
elseif ($num2 >= $num1 && $num2 >= $num3) 
	{
    	echo "El número mayor es: " . $num2 . "\n";
	} 
else 
	{
    echo "El número mayor es: " . $num3 . "\n";
	}
?>