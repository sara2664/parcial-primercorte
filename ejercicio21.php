<!DOCTYPE html>


<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinar numero</title>

</head>

<body>

    <h2>Adivinar numero</h2>

    <form method="post">

        <label>Digite un numero entre 1 a 10: <input type="number" name="num" required></label><br><br>
        <input type="submit" name="calcular" value="Tengo suerte"><br><br>

    </form>
<?php
	
	// Generar un número aleatorio si no está definido en la sesión
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$random_number = rand(1,10);
		$num = $_POST['num'];
						
		if ($num == $random_number) 
		{
			echo "Adivinaste el numero","<br>";
		} 
		else 
		{
			echo "Sigue intentando","<br>";
		}
		
	}
?>
</body>
</html>