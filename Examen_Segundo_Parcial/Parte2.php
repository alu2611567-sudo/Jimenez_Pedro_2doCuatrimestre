<?php
// Crea un programa para determinar la paridad de un numero mediante un formulario HTML, el cual debera solicitar un unico valor numerico. El formulario debe procesarse mediante el metodo POST hacia un script PHP. El script debe verificar que el campo no este vacio y que el valor ingresado sea un numero entero; una vez validado, el programa debera determinar y mostrar si el numero es par o impar. En caso de que el dato sea invalido o el campo este vacio, se debera mostrar un mensaje de error claro para el usuario.
if ($_POST) {
    $numero = $_POST['numero'];

    // Verificar si es par o impar
    if ($numero % 2 == 0) {
        $paridad = "par";
    } else {
        $paridad = "impar";
    }
}
?>