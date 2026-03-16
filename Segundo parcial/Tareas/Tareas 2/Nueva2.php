<?php
// 2. Crea un formulario que pida un párrafo o texto libre (Utiliza un textarea). Al enviar el formulario, muestra lo siguiente: a. El número total de palabras en el texto (Sin contar espacios en blanco). b. El número de oraciones, contando los puntos finales “.” Presentes en el texto. c. La palabra más larga del texto. d. El promedio de caracteres por palabra, redondeado a 2 decimales (Usa round()).
if ($_POST) {
    $texto = $_POST['texto'];
    
    // Contar el número total de palabras
    $palabras = str_word_count($texto);
    
    // Contar el número de oraciones
    $oraciones = substr_count($texto, '.');
    
    // Encontrar la palabra más larga
    $palabras_array = explode(' ', $texto);
    $palabra_mas_larga = '';
    foreach ($palabras_array as $palabra) {
        if (strlen($palabra) > strlen($palabra_mas_larga)) {
            $palabra_mas_larga = $palabra;
        }
    }
    
    // Calcular el promedio de caracteres por palabra
    $total_caracteres = strlen(str_replace(' ', '', $texto));
    $promedio_caracteres = round($total_caracteres / $palabras, 2);
}
?>