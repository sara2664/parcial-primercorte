<?php
// Dirección de correo de ejemplo
$correo = "estudiante@usa.edu.com";

// Verificar si contiene '@' y '.'
if (strpos($correo, '@') !== false) {
    if (strpos($correo, '.') !== false) {
        echo "El correo $correo es válido. <br>";
    } else {
        echo "El correo $correo no es válido. Falta el punto. <br>";
    }
} else {
    echo "El correo $correo no es válido. Falta el @. <br>";
}
?>
