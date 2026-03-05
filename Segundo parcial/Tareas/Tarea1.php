<?php
// 1. Crea un formulario que pida un número entero. Al enviar el formulario, indica lo siguiente: a. Si el número es par o impar. b. Si el número es positivo o negativo.
// Muestra los resultados en pantalla.
if ($_POST) {
    $numero = $_POST['numero'];
    
    // Verificar si es par o impar
    if ($numero % 2 == 0) {
        $paridad = "par";
    } else {
        $paridad = "impar";
    }
    
    // Verificar si es positivo o negativo
    if ($numero > 0) {
        $signo = "positivo";
    } else if ($numero < 0) {
        $signo = "negativo";
    } else {
        $signo = "cero";
    }
}
?>

<form method="post">
    <label for="numero">Número entero:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Enviar</button>
</form>

<?php
if (isset($paridad) && isset($signo)) {
    echo "<p>El número es $paridad y $signo.</p>";
}
?>