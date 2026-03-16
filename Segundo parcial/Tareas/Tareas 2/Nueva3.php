<?php
// 3. Crea un formulario que pida las calificaciones y los porcentajes de peso de tres evaluaciones, por ejemplo: a. Parcial 1: Calificación y su porcentaje de peso. b. Parcial 2: Calificación y su porcentaje de peso: c. Examen final: Calificación y su porcentaje de peso Recuerda que la suma de estos porcentajes de peso, debe ser del 100%. Al enviar el formulario, muestra lo siguiente: a. La aportación ponderada de cada evaluación (Calificación x porcentaje / 100). b. El promedio ponderado final (Suma de las 3 aportaciones). c. Si el alumno aprobó o reprobó (Mínimo aprobatorio: 60). d. La evaluación con la calificación más alta y la más baja.
if ($_POST) {
    $calificacion1 = $_POST['calificacion1'];
    $peso1 = $_POST['peso1'];
    $calificacion2 = $_POST['calificacion2'];
    $peso2 = $_POST['peso2'];
    $calificacion3 = $_POST['calificacion3'];
    $peso3 = $_POST['peso3'];

    // Verificar que la suma de los pesos sea 100
    if ($peso1 + $peso2 + $peso3 != 100) {
        echo "<p style='color: red;'>La suma de los porcentajes de peso debe ser 100%.</p>";
        exit;
    }

    // Calcular la aportación ponderada de cada evaluación
    $aportacion1 = ($calificacion1 * $peso1) / 100;
    $aportacion2 = ($calificacion2 * $peso2) / 100;
    $aportacion3 = ($calificacion3 * $peso3) / 100;

    // Calcular el promedio ponderado final
    $promedio_ponderado = $aportacion1 + $aportacion2 + $aportacion3;

    // Determinar si el alumno aprobó o reprobó
    if ($promedio_ponderado >= 60) {
        echo "<p style='color: green;'>¡Felicidades! Has aprobado con un promedio ponderado de " . number_format($promedio_ponderado, 2) . ".</p>";
    } else {
        echo "<p style='color: red;'>Lo siento, has reprobado con un promedio ponderado de " . number_format($promedio_ponderado, 2) . ".</p>";
    }

    // Encontrar la calificación más alta y la más baja
    $calificaciones = [$calificacion1, $calificacion2, $calificacion3];
    $max_calificacion = max($calificaciones);
    $min_calificacion = min($calificaciones);

    echo "<p>Aportación ponderada del Parcial 1: " . number_format($aportacion1, 2) . "</p>";
    echo "<p>Aportación ponderada del Parcial 2: " . number_format($aportacion2, 2) . "</p>";
    echo "<p>Aportación ponderada del Examen Final: " . number_format($aportacion3, 2) . "</p>";
    echo "<p>Calificación más alta: " . $max_calificacion . "</p>";
    echo "<p>Calificación más baja: " . $min_calificacion . "</p>";
}
?>