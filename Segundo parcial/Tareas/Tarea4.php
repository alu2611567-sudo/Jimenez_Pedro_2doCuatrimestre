<?php
// 4. Crea un formulario con un campo de texto donde el usuario ingrese nombres separados por coma. Muestra la siguiente información en pantalla: a. Cada nombre en una línea diferente. b. Total, de nombres ingresados. c. Muestra los nombres ordenados alfabéticamente. d. Indica si hay nombres duplicados (Investiga el método array_unique()).
if ($_POST) {
    $nombres = $_POST['nombres'];
    
    // Convertir la cadena de nombres en un array
    $array_nombres = explode(',', $nombres);
    
    // Eliminar espacios en blanco alrededor de los nombres
    $array_nombres = array_map('trim', $array_nombres);
    
    // Mostrar cada nombre en una línea diferente
    echo "<p>Nombres ingresados:</p>";
    foreach ($array_nombres as $nombre) {
        echo "<p>$nombre</p>";
    }
    
    // Mostrar el total de nombres ingresados
    $total_nombres = count($array_nombres);
    echo "<p>Total de nombres ingresados: $total_nombres</p>";
    
    // Mostrar los nombres ordenados alfabéticamente
    sort($array_nombres);
    echo "<p>Nombres ordenados alfabéticamente:</p>";
    foreach ($array_nombres as $nombre) {
        echo "<p>$nombre</p>";
    }
    
    // Verificar si hay nombres duplicados
    $nombres_unicos = array_unique($array_nombres);
    if (count($nombres_unicos) < count($array_nombres)) {
        echo "<p>Hay nombres duplicados.</p>";
    } else {
        echo "<p>No hay nombres duplicados.</p>";
    }
}
?>

<form method="post">
    <label for="nombres">Ingrese nombres separados por coma:</label><br>
    <input type="text" id="nombres" name="nombres" required><br><br>
    <input type="submit" value="Enviar">
</form>

<?php
// El código para mostrar los resultados se encuentra dentro del bloque if ($_POST) { ... }
?>