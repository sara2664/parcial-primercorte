<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es palindromo?</title>

</head>

<body>

    <h2>La palabra es un palindromo?</h2>

    <form method="post">

        <label>Digite la palabra<input type="text" name="palabra" step="0" required></label><br><br>
        
        <input type="submit" name="calcular" value="Verifica">

    </form>
<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$palabra= $_POST["palabra"];	
			
			function esPalindromo($palabra) 
			{
			$palabra = strtolower($palabra);
			//$palabra = preg_replace('/[^a-z0-9]/', '', $palabra);
			$invertida = strrev($palabra);
			return $palabra === $invertida;
			}
			if (esPalindromo($palabra)) {
                echo "<p>La palabra <strong>'$palabra'</strong> es un palíndromo.</p>";
            } else 
			{
                echo "<p>La palabra <strong>'$palabra'</strong> no es un palíndromo.</p>";
            }
		}	
?>