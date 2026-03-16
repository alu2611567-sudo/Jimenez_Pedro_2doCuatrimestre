<?php
    // Ejemplo 2: Simulación de encuesta de satisfacción

    // Verificamos si el formulario ha sido enviado por metodo POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificamos que los campos existan
        if (isset($_POST['nombre']) && isset($_POST['satisfaccion']) && isset($_POST['comentarios'])) {
            // Recibimos los datos del formulario y los almacenamos en variables
            $nombre = $_POST['nombre'];
            $satisfaccion = $_POST['satisfaccion'];
            $comentarios = $_POST['comentarios'];

            // Mostramos un resumen de los resultados de la encuesta
            echo "<h2>Resumen de la encuesta</h2>";
            echo "<p><strong>Nombre del encuestado: </strong> $nombre</p>";
            echo "<p><strong>Nivel de satisfacción: </strong> $satisfaccion</p>";
            echo "<p><strong>Comentarios adicionales: </strong> $comentarios</p>";

            echo "<p>¡Gracias por participar en la encuesta!</p>";
            echo "<a href='Ejemplo2.html'>Volver a la encuesta</a>";
        } else {
            // Si no se han completado todos los campos, mostramos un mensaje de error
            echo "<p style='color: red;'>¡Por favor, complete todos los campos del formulario!</p>";
            echo "<a href='Ejemplo2.html'>Volver a la encuesta</a>";
        }
    } else {
        // Si el formulario no ha sido enviado por metodo POST, mostramos un mensaje de error
        echo "<p style='color: red;'>¡El formulario no ha sido enviado correctamente!</p>";
        echo "<a href='Ejemplo2.html'>Volver a la encuesta</a>";
    }
?>