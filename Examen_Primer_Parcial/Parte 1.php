// Haz un programa que declare una frase y muestre la palabra mas larga
<?php
$frase = "El zorro marrón rápido salta sobre el perro perezoso";
$palabras = explode(" ", $frase);
$palabraMasLarga = "";
foreach ($palabras as $palabra) {
    if (strlen($palabra) > strlen($palabraMasLarga)) {
        $palabraMasLarga = $palabra;
    }
}
echo "La palabra más larga es: " . $palabraMasLarga;
?>