<?php
// 5. Haz un programa que tenga un formulario, el cual deberá recibir una lista de números separados por coma. Luego, clasifícalos y muestra lo siguiente en pantalla (Divídelo en secciones con <hr>): a. Los números positivos. b. Los números negativos. c. Los 0. d. Los números pares. e. Los números impares.
// Muestra el conteo de cada categoría y un mensaje si una categoría está vacía.
if ($_POST) {
    $numeros = $_POST['numeros'];
    
    // Convertir la cadena de números en un array
    $array_numeros = explode(',', $numeros);
    
    // Eliminar espacios en blanco alrededor de los números
    $array_numeros = array_map('trim', $array_numeros);
    
    // Inicializar categorías
    $positivos = [];
    $negativos = [];
    $ceros = [];
    $pares = [];
    $impares = [];
    
    // Clasificar los números
    foreach ($array_numeros as $numero) {
        if (is_numeric($numero)) {
            if ($numero > 0) {
                $positivos[] = $numero;
            } else if ($numero < 0) {
                $negativos[] = $numero;
            } else {
                $ceros[] = $numero;
            }
            
            if ($numero % 2 == 0) {
                $pares[] = $numero;
            } else {
                $impares[] = $numero;
            }
        }
    }
}
?>

<form method="post">
    <label for="numeros">Ingrese números separados por coma:</label><br>
    <input type="text" id="numeros" name="numeros" required><br><br>
    <input type="submit" value="Enviar">
</form>
<?php
if (isset($positivos) && isset($negativos) && isset($ceros)
    && isset($pares) && isset($impares)) {
    echo "<hr><p>Números positivos: " . implode(', ', $positivos) . " (Total: " . count($positivos) . ")</p>";
    echo "<hr><p>Números negativos: " . implode(', ', $negativos) . " (Total: " . count($negativos) . ")</p>";
    echo "<hr><p>Números 0: " . implode(', ', $ceros) . " (Total: " . count($ceros) . ")</p>";
    echo "<hr><p>Números pares: " . implode(', ', $pares) . " (Total: " . count($pares) . ")</p>";
    echo "<hr><p>Números impares: " . implode(', ', $impares) . " (Total: " . count($impares) . ")</p>";
}
?>