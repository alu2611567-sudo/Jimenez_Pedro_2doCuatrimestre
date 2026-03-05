<?php
// 8. Haz un formulario que pida un número entero positivo N. Posteriormente calcula y muestra en pantalla lo siguiente: a. La suma de todos los números del 1 al N (Es decir, si el usuario ingresa 9, muestra el resultado de sumar 1+2+3+4+5+6+7+8+9). b. La suma de todos los números pares entre 1 y N (Es decir, si el usuario ingresa 9, muestra el resultado de sumar 2+4+6+8). c. La suma de todos los números impares entre 1 y N (Es decir, si el usuario ingresa 9, muestra el resultado de sumar 1+3+5+7+9).
if ($_POST) {
    $N = $_POST['N'];
    
    // Verificar si N es un número entero positivo
    if (is_numeric($N) && $N > 0 && floor($N) == $N) {
        // Calcular la suma de todos los números del 1 al N
        $suma_total = ($N * ($N + 1)) / 2; // Fórmula de la suma de los primeros N números
        
        // Calcular la suma de todos los números pares entre 1 y N
        $suma_pares = 0;
        for ($i = 2; $i <= $N; $i += 2) {
            $suma_pares += $i;
        }
        
        // Calcular la suma de todos los números impares entre 1 y N
        $suma_impares = 0;
        for ($i = 1; $i <= $N; $i += 2) {
            $suma_impares += $i;
        }
        
        // Mostrar los resultados
        echo "<p>La suma de todos los números del 1 al $N es: $suma_total</p>";
        echo "<p>La suma de todos los números pares entre 1 y $N es: $suma_pares</p>";
        echo "<p>La suma de todos los números impares entre 1 y $N es: $suma_impares</p>";
    } else {
        echo "<p>Por favor, ingresa un número entero positivo.</p>";
    }
}
?>

<form method="post">
    <label for="N">Número entero positivo N:</label>
    <input type="number" id="N" name="N" min="1" required>
    <button type="submit">Enviar</button>
</form>
<?php
// El código para mostrar los resultados se encuentra dentro del bloque if ($_POST) { ... }
?>