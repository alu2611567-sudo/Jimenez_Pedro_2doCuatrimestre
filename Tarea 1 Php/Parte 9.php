Haz un programa que almacene las ventas de una semana y muestre cuántos días las ventas fueron mayores a $3,000.
<?php
$ventas_semanales = [2500, 3200, 4500, 2800, 5000, 1500, 4000];
$dias_mayores_3000 = 0;
foreach ($ventas_semanales as $venta) {
    if ($venta > 3000) {
        $dias_mayores_3000++;
    }
}
echo "Cantidad de días con ventas mayores a $3,000: " . $dias_mayores_3000 . "\n";
?>