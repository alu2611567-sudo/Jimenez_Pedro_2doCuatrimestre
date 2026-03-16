<?php
// 5. Crea un formulario que pida un número entero N (entre 1 y 10). Al enviar el formulario, genera y muestra lo siguiente utilizando bucles: a. Una pirámide de asteriscos de N filas (Dependiendo del número ingresado), donde: i. La fila 1 tiene 1 asterisco. ii. Cada fila tiene 2 asteriscos más que la anterior. iii. Los asteriscos de cada fila están centrados respecto a la fila más ancha (Usa str_repeat() para los espacios). Ejemplo para N = 4 *, ***, *****, *******. b. El número total de asteriscos que tiene la pirámide completa (Pista: La suma de la serie 1+3+5+...+(2N-1) = N2 )
if ($_POST) {
    $N = $_POST['N'];
    
    // Validar que N esté entre 1 y 10
    if ($N < 1 || $N > 10) {
        echo "<p style='color: red;'>Por favor, ingresa un número entre 1 y 10.</p>";
        exit;
    }
    
    $total_asteriscos = 0;
    
    for ($i = 1; $i <= $N; $i++) {
        $num_asteriscos = 2 * $i - 1;
        $total_asteriscos += $num_asteriscos;
        $espacios = str_repeat(' ', $N - $i);
        echo "<p>" . $espacios . str_repeat('*', $num_asteriscos) . "</p>";
    }
    
    echo "<p>Total de asteriscos en la pirámide: " . $total_asteriscos . "</p>";
}
?>