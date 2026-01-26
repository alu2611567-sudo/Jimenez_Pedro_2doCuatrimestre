Haz un programa que declare un arreglo asociativo con producto y cantidad y muestre los que están bajos (<5).
<?php
$inventario = [
    "manzanas" => 10,
    "naranjas" => 3,
    "plátanos" => 7,
    "uvas" => 2,
    "peras" => 8
];
echo "Productos con cantidad baja (<5):\n";
foreach ($inventario as $producto => $cantidad) {
    if ($cantidad < 5) {
        echo $producto . ": " . $cantidad . "\n";
    }
}
?>