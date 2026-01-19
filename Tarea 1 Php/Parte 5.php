Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo, muestre cada producto con la cantidad vendida y calcule el total de productos vendidos.
<?php
$ventas_productos = [
    "Producto A" => 150,
    "Producto B" => 200,
    "Producto C" => 120,
    "Producto D" => 300,
    "Producto E" => 250
];
$total_vendidos = 0;
foreach ($ventas_productos as $producto => $cantidad) {
    echo "Producto: " . $producto . " - Cantidad vendida: " . $cantidad . "\n";
    $total_vendidos += $cantidad;
}
echo "Total de productos vendidos: " . $total_vendidos . "\n";
?>