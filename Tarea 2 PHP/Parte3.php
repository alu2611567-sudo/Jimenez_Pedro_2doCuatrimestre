Haz un programa que declare un arreglo de palabras y muestre solo las que tienen más de 5 letras.
<?php
$palabras = ["manzana", "sol", "computadora", "casa", "elefante", "luz", "programación"];
$palabrasLargas = [];
foreach ($palabras as $palabra) {
    if (strlen($palabra) > 5) {
        $palabrasLargas[] = $palabra;
    }
}
echo "Palabras con más de 5 letras: ";
foreach ($palabrasLargas as $palabra) {
    echo $palabra . " ";
}
?>