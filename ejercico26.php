<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invierte la oracion</title>

</head>

<body>

    <h2>Invertir oracion</h2>

    <form method="post">

        <label>Digite la oracion<input type="text" name="oracion" step="0" required></label><br><br>
        
        <input type="submit" name="calcular" value="Invierte la frase">

    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{

			$texto= $_POST["oracion"];
            $textoInvertido = strrev($texto);
            echo "La cadena invertida es: $textoInvertido\n";
		}	
?>