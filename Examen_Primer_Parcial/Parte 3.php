// Haz un programa que declare un arreglo y cuente pares e impares
<?php
$arreglo = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = 0;
$impares = 0;
for ($i = 0; $i < count($arreglo); $i++) {
    if ($arreglo[$i] % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}
echo "Pares: " . $pares . ", Impares: " . $impares;
?>