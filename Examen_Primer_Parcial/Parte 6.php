// Haz un programa que ordene un arreglo de numeros sin funciones predefinidas
<?php
$arreglo = [6, 4, 8, 1, 3, 5, 7, 2];
for ($i = 0; $i < count($arreglo) - 1; $i++) {
    for ($j = 0; $j < count($arreglo) - $i - 1; $j++) {
        if ($arreglo[$j] > $arreglo[$j + 1]) {
            $temp = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j + 1];
            $arreglo[$j + 1] = $temp;
        }
    }
}
echo "Arreglo ordenado: ";
foreach ($arreglo as $valor) {
    echo $valor . " ";
}
?>