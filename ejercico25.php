<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantidad de palabras</title>

</head>

<body>

    <h2>Cantidad de palabras</h2>

    <form method="post">

        <label>Digite frase<input type="text" name="palabra" step="0" required></label><br><br>
        
        <input type="submit" name="calcular" value="Descubre">

    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
            $oracion = $_POST["palabra"];
			$cantidadPalabras = str_word_count($oracion);
            echo "La oración ingresada tiene $cantidadPalabras palabras.\n";
		}	
?>