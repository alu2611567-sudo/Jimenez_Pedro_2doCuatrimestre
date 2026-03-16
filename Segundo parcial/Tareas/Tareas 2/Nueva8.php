<?php
// 8. Crea un formulario que pida una base numérica entera y un exponente máximo (Número entre 1 y 10). Al enviar el formulario, calcula y muestra: a. Una tabla con las potencias de la base desde el exponente 1 hasta el exponente máximo ingresado, con el formato: 2^1 = 2 2^2 = 4 2^3 = 8 Usa pow() o el operador ** para calcular cada potencia. b. La suma de todas las potencias calculadas en la tabla. c. Para cada resultado, indica si el número es par o impar.
if ($_POST) {
    $base = $_POST['base'];
    $exponente_maximo = $_POST['exponente_maximo'];
    
    // Validar que el exponente máximo esté entre 1 y 10
    if ($exponente_maximo < 1 || $exponente_maximo > 10) {
        echo "<p style='color: red;'>Por favor, ingresa un exponente máximo entre 1 y 10.</p>";
        exit;
    }

    $suma_potencias = 0;
    echo "<table border='1'>";
    echo "<tr><th>Exponente</th><th>Potencia</th><th>Par/Impar</th></tr>";
    
    for ($i = 1; $i <= $exponente_maximo; $i++) {
        $potencia = pow($base, $i);
        $suma_potencias += $potencia;
        $paridad = ($potencia % 2 == 0) ? "Par" : "Impar";
        
        echo "<tr><td>$i</td><td>$base^$i = $potencia</td><td>$paridad</td></tr>";
    }
    
    echo "</table>";
    echo "<p>Suma de todas las potencias: " . number_format($suma_potencias, 2) . "</p>";
}
?>