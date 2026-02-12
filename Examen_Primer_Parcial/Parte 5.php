// Haz un programa que declare un arreglo asociativo de productos con precios y calcule el total
<?php
$prductos = [
    "Manzana" => 1.5,
    "Banana" => 0.5,
    "Naranja" => 0.8,
    "Pera" => 1.2
];
$total = 0;
foreach ($prductos as $producto => $precio) {
    $total += $precio;
}
echo "El total de los productos es: " . $total;
?>