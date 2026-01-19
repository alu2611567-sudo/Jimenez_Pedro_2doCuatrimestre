Haz un programa que almacene varios números en un arreglo y muestre únicamente los números mayores a 50 utilizando un ciclo y una condición.
<?php
$numeros = [10, 55, 23, 67, 89, 45, 12, 78, 34, 90];
foreach ($numeros as $numero) {
    if ($numero > 50) {
        echo "Número mayor a 50: " . $numero . "\n";
    }
}
?>