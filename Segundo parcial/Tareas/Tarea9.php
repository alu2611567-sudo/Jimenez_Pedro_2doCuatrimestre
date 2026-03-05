<?php
// 9. Haz un programa que solicite una frase mediante un formulario y una palabra a buscar. Posteriormente, imprime (Muestra en pantalla): a. Cuántas veces aparece la palabra en la frase (Sin importar mayúsculas o minúsculas). b. Si la frase contiene o no la palabra buscada. c. La frase con todas las apariciones de las palabras resaltadas en negritas (etiqueta <strong> </strong> para resaltar en negritas).
if ($_POST) {
    $frase = $_POST['frase'];
    $palabra_buscar = $_POST['palabra_buscar'];
    
    // Contar cuántas veces aparece la palabra en la frase (sin importar mayúsculas o minúsculas)
    $conteo = substr_count(strtolower($frase), strtolower($palabra_buscar));
    
    // Verificar si la frase contiene la palabra buscada
    $contiene_palabra = stripos($frase, $palabra_buscar) !== false;
    
    // Resaltar todas las apariciones de la palabra en negritas
    $frase_resaltada = str_ireplace($palabra_buscar, "<strong>$palabra_buscar</strong>", $frase);
    
    // Mostrar los resultados
    echo "<p>La palabra '$palabra_buscar' aparece $conteo veces en la frase.</p>";
    echo "<p>La frase " . ($contiene_palabra ? "contiene" : "no contiene") . " la palabra '$palabra_buscar'.</p>";
    echo "<p>Frase con palabras resaltadas: $frase_resaltada</p>";
}
?>

<form method="post">
    <label for="frase">Ingrese una frase:</label><br>
    <input type="text" id="frase" name="frase" required><br><br>
    <label for="palabra_buscar">Ingrese la palabra a buscar:</label><br>
    <input type="text" id="palabra_buscar" name="palabra_buscar" required><br><br>
    <input type="submit" value="Enviar">
</form>
<?php
// El código para mostrar los resultados se encuentra dentro del bloque if ($_POST) { ... }
?>