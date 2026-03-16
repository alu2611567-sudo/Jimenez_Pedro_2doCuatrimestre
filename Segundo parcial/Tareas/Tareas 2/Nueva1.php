<?php 
// 1. Crea un formulario que pida una palabra o frase. Al enviar el formulario muestra lo siguiente: a. La palabra o frase original tal como fue ingresada. b. La palabra o frase invertida (Puedes utilizar strrev()). c. Si es un palíndromo o no (Ignora mayúsculas. Minúsculas y espacios en blanco).
// Muestra los resultados en pantalla.
if ($_POST) {
    $frase = $_POST['frase'];
    
    // Mostrar la frase original
    echo "<p>Frase original: " . htmlspecialchars($frase) . "</p>";
    
    // Invertir la frase
    $frase_invertida = strrev($frase);
    echo "<p>Frase invertida: " . htmlspecialchars($frase_invertida) . "</p>";
    
    // Verificar si es un palíndromo
    $frase_sin_espacios = str_replace(' ', '', strtolower($frase));
    $frase_invertida_sin_espacios = str_replace(' ', '', strtolower($frase_invertida));
    if ($frase_sin_espacios === $frase_invertida_sin_espacios) {
        echo "<p>La frase es un palíndromo.</p>";
    } else {
        echo "<p>La frase no es un palíndromo.</p>";
    }
}
?>