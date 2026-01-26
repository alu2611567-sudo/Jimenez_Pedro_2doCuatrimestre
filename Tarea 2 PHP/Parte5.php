Haz un programa que declare un arreglo de números y separe pares e impares en dos arreglos nuevos.
<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = [];
$impares = [];
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}
echo "Números pares: " . implode(", ", $pares) . "\n";
echo "Números impares: " . implode(", ", $impares) . "\n";
?>