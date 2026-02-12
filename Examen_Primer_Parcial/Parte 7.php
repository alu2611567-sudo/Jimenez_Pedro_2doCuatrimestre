// Haz un programa que declare un arreglo de calificaciones y calcule el promedio
<?php
$calificaciones = [95, 88, 78, 92, 85];
$total = 0;
for ($i = 0; $i < count($calificaciones); $i++) {
    $total += $calificaciones[$i];
}
$promedio = $total / count($calificaciones);
echo "El promedio de las calificaciones es: " . $promedio;
?>