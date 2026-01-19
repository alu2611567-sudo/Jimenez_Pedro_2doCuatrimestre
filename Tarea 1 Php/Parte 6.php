 Haz un programa que guarde los precios de varios productos en un arreglo y calcule el precio total sumando todos los valores.
 <?php
$precios_productos = [100, 250, 75, 300, 150];
$total_precio = 0;
foreach ($precios_productos as $precio) {
    $total_precio += $precio;
}
echo "Precio total de los productos: $" . $total_precio . "\n";
?>