<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de vocales</title>

</head>

<body>

    <h2>Contador de vocales</h2>
    <form method="post">

        <label>Escriba la palabra: <input type="text" name="palabra" step="0.01" required></label><br><br>
        
        <input type="submit" name="calcular" value="Calcular vocales">

    </form>

	<?php

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	        // Obtener las calificaciones del formulario

        	$palabra= $_POST["palabra"];
			$palabra = strtolower($palabra);
			$vocales = 0;

		for ($i = 0; $i < strlen($palabra); $i++) 
		{
			if ($palabra[$i] == 'a' || $palabra[$i] == 'e' || $palabra[$i] == 'i' || $palabra[$i] == 'o' || $palabra[$i] == 'u') 
			{
				$vocales++;
			}
		}

		echo "<h3>La cantidad de vocales en la palabra es: " . $vocales . "</h3>";
	}
	?>

</body>

</html>

