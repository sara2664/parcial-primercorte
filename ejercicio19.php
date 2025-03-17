<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>

</head>

<body>

    <h2>Calculadora Simple</h2>

    <form method="post">

        <label>Digite el primer numero: <input type="number" name="nume1"  required></label><br><br>
        <label>Digite el segundo numero: <input type="number" name="nume2" required></label><br><br>
        <label>Elija una operacion(+, -, *, /): <input type="text" name="oper" required></label><br><br>
        <input type="submit" name="calcular" value="Calcular">

    </form>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{			
	        $num1 = $_POST["nume1"];
	        $num2 = $_POST["nume2"];
        	$operacion = $_POST["oper"];



			switch ($operacion) 
			{
				case "+":
					$resultado = $num1 + $num2;
					echo "El resultado de la suma es: " . $resultado . "\n";
					break;
					
				case "-":
					$resultado = $num1 - $num2;
					echo "El resultado de la resta es: " . $resultado . "\n";
					break;
					
				case "*":
					$resultado = $num1 * $num2;
					echo "El resultado de la multiplicación es: " . $resultado . "\n";
					break;
					
				case "/":
					
					if ($num2 != 0) {
						$resultado = $num1 / $num2;
						echo "El resultado de la división es: " . $resultado . "\n";
					} else {
						echo "Error: No se puede dividir por cero.\n";
					}
					break;
					
				default:
				echo "Operación no válida. Por favor, elija entre +, -, * o /.\n";
			}
		}
		?>
</body>
</html>
