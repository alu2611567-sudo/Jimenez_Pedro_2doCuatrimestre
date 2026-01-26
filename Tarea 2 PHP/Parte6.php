Haz un programa que declare una cadena y cuente cuántas vocales tiene.
<?php
$cadena = "Esta es la cadena que se muestra.";
$vocales = preg_match_all('/[aeiouAEIOU]/', $cadena, $coincidencias);
echo "La cadena tiene " . $vocales . " vocales.";
?>