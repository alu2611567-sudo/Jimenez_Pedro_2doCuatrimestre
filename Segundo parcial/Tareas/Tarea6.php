<?php
// 6. Crea un programa que tenga un formulario, en el cual se solicite el nombre completo. El script PHP debe extraer las iniciales de cada palabra y mostrarlas separadas por puntos y mostrarlo en pantalla.
if ($_POST) {
    $nombre_completo = $_POST['nombre_completo'];
    
    // Convertir el nombre completo en un array de palabras
    $array_palabras = explode(' ', $nombre_completo);
    
    // Inicializar el array para almacenar las iniciales
    $iniciales = [];
    
    // Extraer la primera letra de cada palabra y convertirla a mayúscula
    foreach ($array_palabras as $palabra) {
        if (!empty($palabra)) {
            $iniciales[] = strtoupper($palabra[0]);
        }
    }
    
    // Mostrar las iniciales separadas por puntos
    echo "<p>Iniciales: " . implode('.', $iniciales) . "</p>";
}
?>

<form method="post">
    <label for="nombre_completo">Ingrese su nombre completo:</label><br>
    <input type="text" id="nombre_completo" name="nombre_completo" required><br><br>
    <input type="submit" value="Enviar">
</form>
<?php
// El código para mostrar los resultados se encuentra dentro del bloque if ($_POST) { ... }
?>