// Haz un programa que declare una funcion que valide si una palabra es palindromo
<?php
function esPalindromo($palabra) {
    $palabra = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $palabra));
    return $palabra === strrev($palabra);
}
$palabra = "Juan visito el volcan";
if(esPalindromo($palabra)) {
    echo "La palabra es un palindromo";
} else {
    echo "La palabra no es un palindromo";
}
