Haz un programa que almacene el total de ventas de varios vendedores y determine cuál obtuvo la mayor venta.
<?php
$ventas_vendedores = [
    "Vendedor 1" => 4500,
    "Vendedor 2" => 7200,
    "Vendedor 3" => 6100,
    "Vendedor 4" => 8300,
    "Vendedor 5" => 4900
];
$mayor_venta = 0;
$vendedor_exitoso = "";
foreach ($ventas_vendedores as $vendedor => $venta) {
    if ($venta > $mayor_venta) {
        $mayor_venta = $venta;
        $vendedor_exitoso = $vendedor;
    }
}
echo "El " . $vendedor_exitoso . " obtuvo la mayor venta con un monto de $" . $mayor_venta . ".\n";
?>