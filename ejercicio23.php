<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es un año bisiesto?</title>

</head>

<body>

    <h2>Es un año bisiesto</h2>

    <form method="post">

        <label>Digite el año <input type="number" name="año" step="0" required></label><br><br>
        
        <input type="submit" name="calcular" value="Descubre">

    </form>
<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
        $año = $_POST["año"];

			if (($año % 4 == 0 && $año % 100 != 0) || ($año % 400 == 0)) {
				echo "El año $año es bisiesto.\n";
			} else {
				echo "El año $año no es bisiesto.\n";
			}
		}	
?>