<?php
    // Ejemplo 3: Calculadora de interes simple

    // Verificamos si los datos ha sido enviado por metodo POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Valido que los campos esten definidos
        if (isset($_POST['capital_inicial']) && isset($_POST['tasa_interes']) && isset($_POST['plazo_años'])) {
            // Recibimos los datos del formulario y los almacenamos en variables
            $capital_inicial = $_POST['capital_inicial'];
            $tasa_interes = $_POST['tasa_interes'];
            $plazo_años = $_POST['plazo_años'];

            // Validar que el capital y la tasa sean numeros positivos y que el plazo sea al menos 1 año
            if((($capital_inicial > 0) && ($tasa_interes > 0)) && ($plazo_años >= 1)) {
                // Calcular el interes simple
                $interes = ($capital_inicial * $tasa_interes * $plazo_años) / 100;
                // Calcular el monto total a pagar o a cobrar al final del plazo
                $monto_total = $capital_inicial + $interes;
                // Mostrar el desglose año por año
                echo "<h2>Desglose año x año del capital acumulado</h2>";
                for ($Año = 1; $Año <= $plazo_años; $Año++) {
                    $capital_acumulado = $capital_inicial + ($capital_inicial * $tasa_interes * $Año) / 100;
                    echo "<p>Año $Año: $capital_acumulado</p>";
                }
                // Mostrar el resultado final
                echo "<h2>Resultado final</h2>";
                echo "<p> Interes generado: $interes</p>";
                echo "<p> Monto total a pagar o a cobrar al final del plazo: $monto_total</p>";
            } else {
                echo "<p style='color: red;'>¡Por favor, ingrese valores válidos! El capital y la tasa de interés deben ser números positivos, y el plazo debe ser al menos 1 año.</p>";
            }
        }
    }
?>