<?php
// Crea un programa que implemente una calculadora baisca mediante un formulario HTML, el cual debera solicitar dos numeros y contener un menu desplegable (<select>) para elegir entre las operaciones: suma, resta, multiplicacion y division. El formulario debera procesarse mediante el metodo GET en un scirpt PHP, el cual debe verificar que ambos campos no esten vacios y que los valores ingresados sean numericos. Ademas, debera realizar el calculo seleccionado; para la division, debe validar que el segundonumero no sea 0 para evitar errores de ejecucion. Finalmente, debera mostrar la operacion completa y el resultado (Ej: 5 + 3 = 8) o, en caso de error, un mensaje de advertencia claro para el usuario.
if (isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['operacion'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $operacion = $_GET['operacion'];

    if (is_numeric($numero1) && is_numeric($numero2)) {
        switch ($operacion) {
            case 'suma' :
                $resultado = $numero1 + $numero2;
                echo "$numero1 + $numero2 = $resultado";
                break;
            case 'resta';
                $resultado = $numero1 - $numero2;
                echo "$numero1 - $numero2 = $resultado";
                break;
            case 'multiplicacion';
                $resultado = $numero1 * $numero2;
                echo "$numero1 * $numero2 = $resultado";
                break;
            case 'division';
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                    echo "$numero1 / $numero2 = $resultado";
                } else {
                    echo "Error: No se puede dividir por cero.";
                }
                break;
        }
    }
}
?>