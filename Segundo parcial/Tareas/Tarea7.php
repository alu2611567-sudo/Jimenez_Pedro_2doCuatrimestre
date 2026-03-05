<?php
// 7. Haz un formulario que solicite tres números. El script PHP, debe determinar y mostrar: a. Cuál es el número mayor. b. Cuál es el número menor. c. Cuál es el número que queda en el rango medio. Si dos o más números son iguales, indícalo con un mensaje apropiado.
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // Verificar si los números son iguales
    if ($num1 == $num2 && $num2 == $num3) {
        $mensaje = "Los tres números son iguales.";
    } else {
        // Encontrar el número mayor
        $mayor = max($num1, $num2, $num3);
        
        // Encontrar el número menor
        $menor = min($num1, $num2, $num3);
        
        // Encontrar el número del medio
        $medio = ($num1 + $num2 + $num3) - ($mayor + $menor);
        
        $mensaje = "El número mayor es: $mayor<br>";
        $mensaje .= "El número menor es: $menor<br>";
        $mensaje .= "El número del medio es: $medio";
    }
}
?>

<form method="post">
    <label for="num1">Número 1:</label>
    <input type="number" id="num1" name="num1" required><br><br>
    <label for="num2">Número 2:</label>
    <input type="number" id="num2" name="num2" required><br><br>
    <label for="num3">Número 3:</label>
    <input type="number" id="num3" name="num3" required><br><br>
    <input type="submit" value="Enviar">
</form>
<?php
if (isset($mensaje)) {
    echo "<p>$mensaje</p>";
}
?>