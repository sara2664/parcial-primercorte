<html> 

<head> 
  <title>Comparar Palabras</title> 
</head> 

<body> 

  <?php 

  // Definir dos palabras
  $palabra1 = "Hola";
  $palabra2 = "hola";

  // Comparar palabras (sin distinguir mayúsculas/minúsculas)
  if (strcasecmp($palabra1, $palabra2) == 0) {
      echo "Las palabras \"$palabra1\" y \"$palabra2\" son iguales.";
  } else {
      echo "Las palabras \"$palabra1\" y \"$palabra2\" son diferentes.";
  }

  ?> 

</body> 

</html>
