<?php
// Fecha de ejemplo (Año-Mes-Día)
$fecha = "2024-03-07";

// Obtener el número del día de la semana (0 = Domingo, 1 = Lunes, ..., 6 = Sábado)
$numeroDia = date("w", strtotime($fecha));

// Determinar el día en texto
if ($numeroDia == 0) {
    $diaSemana = "Domingo";
} else if ($numeroDia == 1) {
    $diaSemana = "Lunes";
} else if ($numeroDia == 2) {
    $diaSemana = "Martes";
} else if ($numeroDia == 3) {
    $diaSemana = "Miércoles";
} else if ($numeroDia == 4) {
    $diaSemana = "Jueves";
} else if ($numeroDia == 5) {
    $diaSemana = "Viernes";
} else {
    $diaSemana = "Sábado";
}

// Mostrar el resultado
echo "La fecha $fecha corresponde a: $diaSemana <br>";
?>
