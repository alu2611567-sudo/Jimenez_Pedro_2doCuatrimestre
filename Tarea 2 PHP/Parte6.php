Haz un programa que declare una cadena y cuente cuántas vocales tiene.
<?php
$cadena = "Esta es la cadena que se muestra.";
$cadena_limpia = str_replace(' ', '', $cadena);
$cadena_limpia = strtolower($cadena_limpia);
// $vocales = preg_match_all('/[aeiouAEIOU]/', $cadena, $coincidencias);
$vocales = 0;
$arreglo_vocales = ['a', 'e', 'i', 'o', 'u'];

// str_split convierte la cadena en un arreglo de caracteres 
// arreglo = ["e", "s", "t", "a", "e", "s", "l", "a", ...]
foreach (str_split($cadena_limpia) as $letra){
    if (in_array($letra, $arreglo_vocales)){
        $vocales++;
    }
}
echo "La cadena tiene " . $vocales . " vocales.";
?>