<?php
// 9. Crea un formulario que pida lo siguiente: a. Nombre(s) del usuario b. Apellido paterno c. Apellido materno d. Año de nacimiento Al enviar el formulario, genera y muestra las siguientes sugerencias de nombre de usuario (en minúsculas, sin acentos): a. Primera letra del nombre + apellido paterno completo, por ejemplo: “jperez”. b. Nombre completo + los últimos 2 dígitos del año de nacimiento, por ejemplo: “juan95”. c. Apellido paterno + apellido materno + primera letra del nombre, por ejemplo: “perezlopezj”. d. Primera letra del nombre + primera letra del apellido paterno + primera letra del apellido materno + año completo, por ejemplo: “jpl1995”. e. Apellido paterno al revés + número de caracteres que tiene el nombre completo del usuario (Nombre + ambos apellidos), por ejemplo: “zerep14” Para todas las sugerencias, convierte todo a minúsculas y elimina espacios.
if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $anio_nacimiento = $_POST['anio_nacimiento'];
    
    // Generar sugerencias de nombre de usuario
    $sugerencia1 = strtolower(substr($nombre, 0, 1) . $apellido_paterno);
    $sugerencia2 = strtolower($nombre . substr($anio_nacimiento, -2));
    $sugerencia3 = strtolower($apellido_paterno . $apellido_materno . substr($nombre, 0, 1));
    $sugerencia4 = strtolower(substr($nombre, 0, 1) . substr($apellido_paterno, 0, 1) . substr($apellido_materno, 0, 1) . $anio_nacimiento);
    $sugerencia5 = strtolower(strrev($apellido_paterno) . strlen($nombre . $apellido_paterno . $apellido_materno));
    
    // Mostrar las sugerencias
    echo "<p>Sugerencia 1: " . str_replace(' ', '', $sugerencia1) . "</p>";
    echo "<p>Sugerencia 2: " . str_replace(' ', '', $sugerencia2) . "</p>";
    echo "<p>Sugerencia 3: " . str_replace(' ', '', $sugerencia3) . "</p>";
    echo "<p>Sugerencia 4: " . str_replace(' ', '', $sugerencia4) . "</p>";
    echo "<p>Sugerencia 5: " . str_replace(' ', '', $sugerencia5) . "</p>";
}
?>