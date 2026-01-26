Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.
<?php
$gastos_semanales = [150, 200, 175, 300, 250, 400, 225];
$total_gastos = 0;
foreach ($gastos_semanales as $gasto) {
    $total_gastos += $gasto;
}
$promedio_gastos = $total_gastos / count($gastos_semanales);
echo "Total de gastos de la semana: $" . $total_gastos . "\n";
echo "Promedio semanal de gastos: $" . $promedio_gastos . "\n";
?>