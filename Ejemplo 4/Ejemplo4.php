<?php
    // Ejemplo 4: Inicio de sesion
    // Predefinimos el usario y la contraseña que seran los usuarios "correctos" para el inicio de sesion
    $usuario_correcto = "admin";
    $contrasena_correcta = "Incontraseña23";

    // Verificamos si los datos han sido enviados por metodo POST
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validamos que los campos de usuarios y contraseña existan
        if(isset($_POST['usuario']) && isset($_POST['contrasena'])) {
            // Obtener los datos mediante el formulario y almacenarlos en variables
            $usuario_ingresado = $_POST['usuario'];
            $contrasena_ingresada = $_POST['contrasena'];
            // Validar que el usuario y la contraseña ingresados coincidan con los predefinidos
            if(($usuario_correcto === $usuario_ingresado) && ($contrasena_correcta === $contrasena_ingresada)) {
                // En caso de que ambos sean correctos, mostrar un mensaje de bienvenida
                echo "<p style='color: green;'>¡Bienvenido, $usuario_correcto!</p>";
            } else {
                // Si alguno de los dos, es incorrecto. Mostrar un mensaje de error, y mostrar cual fue el dato erroneo, sin mostrar el valor correcto por seguridad
                if(($usuario_correcto !== $usuario_ingresado) && ($contrasena_correcta !== $contrasena_ingresada)) {
                    echo "<p style='color: red;'>¡Error de inicio de sesión! Usuario y contraseña incorrectos.</p>";
                } elseif ($usuario_correcto !== $usuario_ingresado) {
                    echo "<p style='color: red;'>¡Error de inicio de sesión! Usuario incorrecto.</p>";
                } else {
                    echo "<p style='color: red;'>¡Error de inicio de sesión! Contraseña incorrecta.</p>";
                }
            }
        } 
    }
?>