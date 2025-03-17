<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de kilometros</title>

</head>

<body>

    <h2>Convertir de kilometros</h2>

    <form method="post">

        <label>Digite el valor de los kilometros<input type="number" name="kilometros" step="0" required></label><br><br>
        
        <input type="submit" name="calcular" value="Calcular kilometros">
    </form>

<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
            
			$kilometros = $_POST["kilometros"];

		    $millas = $kilometros * 0.621371;

		    echo $kilometros . " kilómetros equivalen a " . $millas . " millas.\n";
		}
?>