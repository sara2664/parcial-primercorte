<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de grados Celsius</title>

</head>

<body>

    <h2>Convertir grador Celsius</h2>

    <form method="post">

        <label>Digite el valor de los grados: <input type="number" name="celsius" step="0" required></label><br><br>
        
        <input type="submit" name="calcular" value="Calcular grados Fahrenheit">

    </form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{

			$celsius = $_POST["celsius"];
			$fahrenheit = ($celsius * 9 / 5) + 32;


			echo "<h3>La temperatura en grados Fahrenheit es: " . $fahrenheit ."°F</h3>";
		
		}
	?>
</body>

</html>