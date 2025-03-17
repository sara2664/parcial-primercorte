<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un numero</title>

</head>

<body>

    <h2>Factorial de un numero</h2>

    <form method="post">

        <label>Digite el numero<input type="number" name="num" step="0" required></label><br><br>
		
        <input type="submit" name="calcular" value="Calcular factorial">

    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
			$numero= $_POST["num"];

			$factorial = 1;
			if ($numero < 0) {
				echo "El factorial no está definido para números negativos.\n";
			} else {
			   
				for ($i = 1; $i <= $numero; $i++) {
					$factorial *= $i;
				}
             echo "El factorial de $numero es: $factorial\n";
			}
		}	
?>