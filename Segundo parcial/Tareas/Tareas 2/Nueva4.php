<?php
// 4. Crea un formulario que pida: a. Nombre del usuario. b. Sexo (Mediante un select) c. Peso en kilogramos. d. Altura en centímetros. e. Edad en años. f. Nivel de actividad física (Usa un select con opciones): i. Sedentario (Poco o nada de ejercicio) -> factor: 1.2 ii. Ligero (Ejercicio 1 – 3 días/semana) -> factor: 1.375 iii. Moderado (Ejercicio 3 – 5 días/semana) -> factor: 1.55 iv. Activo (Ejercicio 6 – 7 días/semana) -> factor: 1.725 Al enviar el formulario, calcula la TMB usando la fórmula de Harris Benedict y muestra: a. El nombre del usuario y sus datos (peso, altura, edad). b. La TMB (Calorías en reposo por día): a. Hombres: TMB = 88.36 + (13.4 x peso) + (4.8 x altura) – (5.7 x edad) b. Mujeres: TMB = 447.6 + (9.2 x peso) + (3.1 x altura) – (4.3 x edad) c. Las calorías diarias recomendadas según el nivel de actividad (Usa la fórmula TMB x factor de actividad), redondeadas a 2 decimales.
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $nivel_actividad = $_POST['nivel_actividad'];

    // Validar que el nombre no esté vacío
    if (empty($nombre)) {
        echo "<p style='color: red;'>Por favor, ingresa tu nombre.</p>";
        exit;
    }

    // Validar que los campos numéricos sean positivos
    if ($peso <= 0 || $altura <= 0 || $edad <= 0) {
        echo "<p style='color: red;'>Por favor, ingresa valores positivos para peso, altura y edad.</p>";
        exit;
    }

    // Usar select para determinar el sexo y validar la entrada
    if ($sexo !== 'masculino' && $sexo !== 'femenino') {
        echo "<p style='color: red;'>Por favor, selecciona un sexo válido.</p>";
        exit;
    }
    
    // Usar select para determinar el nivel de actividad y validar la entrada
    $niveles_validos = ['sedentario', 'ligero', 'moderado', 'activo'];
    if (!in_array($nivel_actividad, $niveles_validos)) {
        echo "<p style='color: red;'>Por favor, selecciona un nivel de actividad válido.</p>";
        exit;
    }

    // Determinar el factor de actividad
    switch ($nivel_actividad) {
        case 'sedentario':
            $factor_actividad = 1.2;
            break;
        case 'ligero':
            $factor_actividad = 1.375;
            break;
        case 'moderado':
            $factor_actividad = 1.55;
            break;
        case 'activo':
            $factor_actividad = 1.725;
            break;
    }

    // Calcular TMB
    if ($sexo === 'masculino') {
        $tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $edad);
    } else {
        $tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $edad);
    }

    // Calcular calorías diarias recomendadas
    $calorias_diarias = round($tmb * $factor_actividad, 2);
    echo "<p>Nombre: " . $nombre . "</p>";
    echo "<p>Sexo: " . $sexo . "</p>";
    echo "<p>Peso: " . $peso . " kg</p>";
    echo "<p>Altura: " . $altura . " cm</p>";
    echo "<p>Edad: " . $edad . " años</p>";
    echo "<p>TMB (Calorías en reposo por día): " . number_format($tmb, 2) . " calorías</p>";
    echo "<p>Calorías diarias recomendadas según el nivel de actividad: " . number_format($calorias_diarias, 2) . " calorías</p>";  
}
?>