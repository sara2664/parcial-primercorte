<?php
function sumaPares($numeros) {
    $suma = 0;

    // Recorrer la lista y sumar los números pares
    foreach ($numeros as $num) {
        if ($num % 2 == 0) { // Verificar si es par
            $suma += $num;
        }
    }

    return $suma;
}


$listaNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


$listaStr = implode(", ", $listaNumeros);


$resultado = sumaPares($listaNumeros);

echo "Lista de números: [$listaStr] <br>";
echo "La suma de los números pares es: $resultado";
?>

