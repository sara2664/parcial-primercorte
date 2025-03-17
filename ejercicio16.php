<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Promedio</title>

</head>

<body>

    <h2>Calculadora de Promedio</h2>

    <form method="post">

        <label>Calificación 1: <input type="number" name="cal1" step="0.01" required></label><br><br>
        <label>Calificación 2: <input type="number" name="cal2" step="0.01" required></label><br><br>
        <label>Calificación 3: <input type="number" name="cal3" step="0.01" required></label><br><br>
        <label>Calificación 4: <input type="number" name="cal4" step="0.01" required></label><br><br>
        <label>Calificación 5: <input type="number" name="cal5" step="0.01" required></label><br><br>
        <input type="submit" name="calcular" value="Calcular Promedio">

    </form>

    <?php

    	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	        // Obtener las calificaciones del formulario

        	$cal1 = $_POST["cal1"];
	        $cal2 = $_POST["cal2"];
        	$cal3 = $_POST["cal3"];
	        $cal4 = $_POST["cal4"];
        	$cal5 = $_POST["cal5"];
	
	        // Calcular el promedio
	        $promedio = ($cal1 + $cal2 + $cal3 + $cal4 + $cal5) / 5;

        	// Mostrar el resultado
        	echo "<h3>El promedio es: " . number_format($promedio, 2) . "</h3>";
	}

    ?>



</body>

</html>

