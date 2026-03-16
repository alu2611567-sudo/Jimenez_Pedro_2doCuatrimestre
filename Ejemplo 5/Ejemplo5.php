<?php
    // Ejemplo 5: Gestionar calificaciones de estudiantes

    // Verificamos si los datos ha sido enviado por metodo POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificamos que los campos enviados existan
        if(isset($_POST['nombre_estudiante']) && isset($_POST['materia']) && isset($_POST['calificacion'])) {
            // Obtenemos los valores de los campos
            $nombre = $_POST['nombre_estudiante'];
            $materia = $_POST['materia'];
            $calificacion = $_POST['calificacion'];
            $calificacion_letra = "";

            // Asignamos valor de calificacion en letra segun la calificacion numerica
            if($calificacion >= 90 && $calificacion <= 100) {
                $calificacion_letra = "A";
                echo "<p style='color: green;'>¡Excelente trabajo, $nombre! Has obtenido una calificación de $calificacion_letra en $materia.</p>";
            } elseif ($calificacion >= 80 && $calificacion < 90) {
                $calificacion_letra = "B";
                echo "<p style='color: blue;'>¡Buen trabajo, $nombre! Has obtenido una calificación de $calificacion_letra en $materia.</p>";
            } elseif ($calificacion >= 70 && $calificacion < 80) {
                $calificacion_letra = "C";
                echo "<p style='color: yellow;'>¡Bien hecho, $nombre! Has obtenido una calificación de $calificacion_letra en $materia.</p>";
            } elseif ($calificacion >= 60 && $calificacion < 70) {
                $calificacion_letra = "D";
                echo "<p style='color: orange;'>¡Sigue esforzándote, $nombre! Has obtenido una calificación de $calificacion_letra en $materia.</p>";
            } elseif ($calificacion >= 0 && $calificacion < 60) {
                $calificacion_letra = "F";
                echo "<p style='color: red;'>¡Sigue esforzándote, $nombre! Has obtenido una calificación de $calificacion_letra en $materia.</p>";
            } else {
                echo "<p style='color: red;'>¡Por favor, ingrese una calificación válida entre 0 y 100!</p>";
                exit;
            }
        }
    }
?>