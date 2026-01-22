// Ejercicio 1: Haz un programa que reciba una cadena (Ya definida en el codigo) y devuelva la misma cadena pero con las palabras en orden inverso. Maneja los posibles errores.
<?php
$cadena = "Bosque de los sueños";
function invertirPalabras($cadena) {
    if (!is_string($cadena) || empty($cadena)) {
        return "Error: La entrada debe ser una cadena de texto no vacía.";
    }
    $palabras = explode(" ", $cadena);
    $palabras_invertidas = array_reverse($palabras);
    return implode(" ", $palabras_invertidas);
}
$resultado = invertirPalabras($cadena);
echo $resultado;
?>

// Ejercicio 2: Haz un programa que reciba una cadena de texto que contenga una lista de numeros separados por comas (Ya definida en el codigo), y devuelva la suma de esos numeros. Maneja los posible errores.
<?php
$cadena_numeros = "10,20,30,40,50";
function sumarNumeros($cadena) {
    if (!is_string($cadena) || empty($cadena)) {
        return "Error: La entrada debe ser una cadena de texto no vacía.";
    }
    $numeros = explode(",", $cadena);
    $suma = 0;
    foreach ($numeros as $numero) {
        if (!is_numeric(trim($numero))) {
            return "Error: Todos los elementos deben ser números.";
        }
        $suma += (float)trim($numero);
    }
    return $suma;
}
$resultado_suma = sumarNumeros($cadena_numeros);
echo $resultado_suma;
?>

// Ejercicio 3: Haz un programa que reciba una cadena de texto (Ya definida en el codigo), y cuente cuantas veces aparece una subcadena especifica dentro de esa cadena. Maneja los posibles errores.
<?php
$cadena_texto = "El sol brilla en el cielo. El sol es una estrella.";
$subcadena = "sol";
function contarSubcadena($cadena, $subcadena) {
    if (!is_string($cadena) || !is_string($subcadena) || empty($cadena) || empty($subcadena)) {
        return "Error: Ambas entradas deben ser cadenas de texto no vacías.";
    }
    return substr_count(strtolower($cadena), strtolower($subcadena));
}
$conteo = contarSubcadena($cadena_texto, $subcadena);
echo $conteo;
?>