<?php
    // Ejemplo 1: Registro con validacion basica 

    // Verificamos si el formulario ha sido enviado por metodo POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifiacamos que los campos existan 
        if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['edad'])){
            // Recibimos los datos del formulario y los almacenamos en variables
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $edad = $_POST['edad'];
            // Remplazamos la contraseña por asteriscos para mostrarla en pantalla
            $password_oculta = str_repeat("*", strlen($password));

            // Verificamos que la contraseña tenga al menos 8 caracteres
            if (strlen ($password) < 8){
                echo "<p style='color: red;'>La contraseña debe tener al menos <strong>8 caracteres.</strong></p>";
            }
            // Verificamos que la edad sea un numero positivo
            elseif ($edad <= 0){
                echo "<p style='color: red;'>¡La edad debe ser un numero positivo!</p>";
            }else {
                // Si no se cumplen las condiciones anteriores, no se puede proceder con el registro
                echo "<h2 style='color: green;'>Registro exitoso</h2>";
                echo "<p><strong>Nombre Completo:</strong> $nombre</p>";
                echo "<p><strong>Correo electrónico:</strong> $email</p>";
                echo "<p><strong>Contraseña:</strong> $password_oculta</p>";
                echo "<p><strong>Edad:</strong> $edad</p>";
            }
        } else {
            echo "<p style='color: red;'>¡Por favor, complete todos los campos del formulario!</p>";
        }
    }else {
        echo "<p style='color: red;'>¡El formulario no ha sido enviado correctamente!</p>";
    }
?>