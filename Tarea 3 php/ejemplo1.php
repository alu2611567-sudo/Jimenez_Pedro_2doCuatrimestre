<?php
    // Ejemplo1.php: Este archivo contendra el script PHP que recibira el nombre y la edad de una persona a traves de un formulario HTML utilizando el metodo GET y mostrara un mensaje de bienvenida con el nombre y la edad ingresados.

    // Verificar si se han recibido los datos a traves del metodo GET
    if (isset($_GET['nombre']) && isset($_GET['edad'])) {
        // Obtener los datos del formulario
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];

        // Validaciones basicas: Verificar que no esten vacioes, que la edad sea un numero y que el nombre no contenga caracteres especiales
        if (!empty($nombre) && !empty($edad) && is_numeric($edad)) {
            //Limpiar los datos para evitar los espacios en blanco y los caracteres especiales
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            $edad = trim($edad);
            $edad = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
            // Mostrar el mensaje de bienvenida con el nombre y la edad ingresados
            echo "<h1>Bienvenido, " . $nombre . "!</h1> <br>";
            echo "<p>Tu edad es: " . $edad . " años.</p>";
        } else {
            // Mostrar un mensaje de error si los datos no son validos
            echo "<h2>Error: Los datos ingresados no son válidos.</h2>";
        }
    }
?>