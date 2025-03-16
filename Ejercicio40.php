<html> 

<head> 
  <title>Verificar Mayoría de Edad</title> 
</head> 

<body> 

  <?php 

  // Generar una edad aleatoria entre 10 y 30
  $edad = rand(10, 30); 

  // Verificar si es mayor de edad
  if ($edad >= 18) {
      echo "El usuario tiene $edad años y es mayor de edad.";
  } else {
      echo "El usuario tiene $edad años y es menor de edad.";
  }

  ?> 

</body> 

</html>

