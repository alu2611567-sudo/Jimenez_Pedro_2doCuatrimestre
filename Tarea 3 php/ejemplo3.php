<?php
    if(isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['peso']) && isset($_POST['altura'])) { // Verifico se se enviaron los parametros 'nombre', 'edad', 'peso' y 'altura' mediante el metodo POST
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        // Validaciones basicas: Verificar que no esten vacioes, que la edad, el peso y la altura sean numeros y que el nombre no contenga caracteres especiales
        if (!empty($nombre) && !empty($edad) && !empty($peso) && !empty($altura) && is_numeric($edad) && is_numeric($peso) && is_numeric($altura)) {
            //Limpiar los datos para evitar los espacios en blanco y los caracteres especiales
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            $edad = trim($edad);
            $edad = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
            $peso = trim($peso);
            $peso = filter_var($peso, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $altura = trim($altura);
            $altura = filter_var($altura, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            // Calcular el indice de masa corporal (IMC) utilizando la formula: IMC = peso (kg) / altura (m)^2
            $imc = $peso / ($altura ** 2);

            // Mostrar un mensaje indicando el nombre del usario, su edad, su peso, y su IMC calculado
            echo "<h1>Hola, " . $nombre . "!</h1> <br>";
            echo "<p>Tu edad es: " . $edad . " años.</p>";
            echo "<p>Tu peso es: " . $peso . " kg.</p>";
            echo "<p>Tu altura es: " . $altura . " m.</p>";
            echo "<p>Tu Indice de Masa Corporal (IMC) es: " . round($imc, 2) . "</p>"; // Redondeo el IMC a 2 decimales para una mejor presentación
        } else {
            // Mostrar un mensaje de error si los datos no son validos  
            echo "<h2>Error: Los datos ingresados no son válidos.</h2>";
        }
    }
?>