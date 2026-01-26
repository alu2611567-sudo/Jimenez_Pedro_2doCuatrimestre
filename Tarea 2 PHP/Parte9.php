Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.
<?php
$alumnos = [
    "Juan" => [85, 90, 78],
    "María" => [92, 88, 95],
    "Pedro" => [70, 75, 80]
];
foreach ($alumnos as $nombre => $calificaciones) {
    $promedio = array_sum($calificaciones) / count($calificaciones);
    echo "El promedio de $nombre es: " . $promedio . "\n";
}
?>