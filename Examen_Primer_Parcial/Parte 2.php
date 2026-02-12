// Haz un programa que declare una frase y cuente las vocales
<?php
$frase = "Bienvenido al mundo";
$vocales = "aeiouAEIOU";
$contador = 0;
for ($i = 0; $i < strlen($frase); $i++) {
    if (strpos($vocales, $frase[$i]) !== false) {
        $contador++;
    }
}
echo "El número de vocales en la frase es: " . $contador;
?>