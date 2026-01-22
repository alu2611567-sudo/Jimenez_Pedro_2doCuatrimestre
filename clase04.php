<?php
// Clase 04 - 22/01/2026

// Manejo de cadenas
$cadena1 = "Esto es una cadena de texto.";
$cadena2 = "Esta es otra cadena de texto.";

// Concatenación de cadenas
$cadena_concatenada = $cadena1 . " " . $cadena2; // En php, el operador de concatenación es el punto (.)
echo("Cadena concatenada: $cadena_concatenada </p> <br>");

// Longitud de una cadena
$longitud_cadena1 = strlen($cadena1); // strlen() devuelve la longitud de una cadena, es decir, el número de caracteres que contiene.
$longitud_cadena2 = strlen($cadena2);
echo("<p> Longitud de cadena1: $longitud_cadena1. <br> Longitud de cadena2: $longitud_cadena2. </p> <br>");

// Convertir una cadena a mayúsculas.
$cadena1_a_mayusculas = strtoupper($cadena1); // strtoupper() convierte todos los caracteres de una cadena a mayúsculas.
echo("<p> cadena1 convertida a mayúsculas: cadena original: $cadena1. Cadena en mayúsculas: $cadena1_a_mayusculas. </p> <br>");

// Convertir una cadena a minúsculas.
$cadena2_a_minusculas = strtolower($cadena2); // strtolower() convierte todos los caracteres de una cadena a minúsculas.
echo("<p> cadena2 convertida a minúsculas: cadena original: $cadena2. Cadena en minúsculas: $cadena2_a_minusculas. </p> <br>");

// Convertir una cadena en arreglo de palabras
$nombres = "Juan, María, Pedro, Ana, Luis, Carmen, José, Lucía";
$arreglo_nombres = explode(", ", $nombres); // explode() divide una cadena en un arreglo utilizando un delimitador especificado.
echo("<p> Arreglo de nombres: </p>");
print_r($arreglo_nombres);
foreach ($arreglo_nombres as $nombre) {
    echo("<li> $nombre </li>");
}

$frutas = "manzana, banana, cereza, durazno, uva, piña";
echo("<p> Cadena de frutas: $frutas </p>");
$arreglo_frutas = explode(", ", $frutas);
echo("<p> Arreglo de frutas: </p>");
print_r($arreglo_frutas);
foreach ($arreglo_frutas as $fruta) {
    echo("<li> $fruta </li>");
}

// Convertir un arreglo en una cadena
$arreglo_colores = array("rojo", "verde", "azul", "amarillo", "naranja");
echo("<p> Arreglo de colores: </p>");
print_r($arreglo_colores);
$cadena_colores = implode(", ", $arreglo_colores); // implode() une los elementos de un arreglo en una cadena utilizando un delimitador especificado.
echo("<p> Cadena de colores: $cadena_colores </p>");

// Otras funciones para manejo de cadenas en php
// Encontrar la posición de una subcadena dentro de una cadena
$frase = "El rápido zorro marrón salta sobre el perro perezoso.";
$sub_cadena = "zorro";
$posicion_subcadena = strpos($frase, $sub_cadena); // strpos() devuelve la posición de la primera aparición de una subcadena en una cadena.
echo("<p> La subcadena '$sub_cadena' se encuentra en la posición: $posicion_subcadena dentro de la frase: $frase </p>");

// Reemplazar una cadena dentro de otra cadena
$frase_original = "La casa es grande y hermosa.";
$frase_modificada = str_replace("grande", "pequeña", $frase_original); // str_replace() reemplaza todas las apariciones de una cadena por otra cadena.
echo("<p> Frase original: $frase_original </p>");
echo("<p> Frase modificada: $frase_modificada </p>");

// Manejo de errores en php
// Comparativa con python: try - except - finally. En php: try - catch - finally.
try {
    // Código que puede generar una excepción
    $numero = 10;
    $divisor = 0;
    if ($divisor == 0) {
        throw new Exception("Error: División por cero no permitida.");
    }
    $resultado = $numero / $divisor;
    echo("<p> Resultado de la división: $resultado </p>");
} catch (Exception $e) {
    // Manejo de la excepción
    echo("<p> Se ha producido una excepción: " . $e->getMessage() . " </p>");
} finally {
    // Código que se ejecuta siempre, haya o no excepción
    echo("<p> Fin del bloque try-catch-finally. </p>");
}

// Tipos de errores en php
// Error de sintaxis: Ocurre cuando hay un error en la estructura del código PHP
// type_error: Ocurre cuando se intenta realizar una operación con un tipo de dato incorrecto
// notice_error: Ocurre cuando se intenta acceder a una variable no definida
// warning_error: Ocurre cuando hay un problema en tiempo de ejecución, pero el script puede continuar ejecutándose
// fatal_error: Ocurre cuando hay un error grave que detiene la ejecución del script