Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.
<?php
$cadena = "Hola mundo";
$letras = count_chars($cadena, 1);
foreach ($letras as $ascii => $cantidad) {
    echo chr($ascii) . " Aparece " . $cantidad . " veces.\n";
}
?>