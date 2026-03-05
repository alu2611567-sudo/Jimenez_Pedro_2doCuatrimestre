<?php
// 3. Haz un programa que solicite al usuario el nombre de un artículo, su precio original y el porcentaje de descuento. Posteriormente muestra en pantalla: a. El monto del descuento. b. El precio final con descuento aplicado. c. Un mensaje indicando si el descuento es “Bajo” (menos del 10%), “Moderado (10% al 30%) o “Alto” (más del 30%).
if ($_POST) {
    $nombre = $_POST['nombre'];
    $precio_original = $_POST['precio_original'];
    $porcentaje_descuento = $_POST['porcentaje_descuento'];

    // Calcular el monto del descuento
    $monto_descuento = $precio_original * ($porcentaje_descuento / 100);

    // Calcular el precio final con descuento
    $precio_final = $precio_original - $monto_descuento;

    // Determinar la categoría del descuento
    if ($porcentaje_descuento < 10) {
        $categoria_descuento = "Bajo";
    } else if ($porcentaje_descuento <= 30) {
        $categoria_descuento = "Moderado";
    } else {
        $categoria_descuento = "Alto";
    }
}
?>

<form method="post">
    <label for="nombre">Nombre del artículo:</label>
    <input type="text" id="nombre" name="nombre" required>
    <label for="precio_original">Precio original:</label>
    <input type="number" id="precio_original" name="precio_original" step="0.01" required>
    <label for="porcentaje_descuento">Porcentaje de descuento:</label>
    <input type="number" id="porcentaje_descuento" name="porcentaje_descuento" step="0.01" required>
    <button type="submit">Enviar</button>
</form>

<?php
if (isset($monto_descuento) && isset($precio_final) && isset($categoria_descuento)) {
    echo "<p>El monto del descuento es: $" . number_format($monto_descuento, 2) . "</p>";
    echo "<p>El precio final con descuento es: $" . number_format($precio_final, 2) . "</p>";
    echo "<p>El descuento es: " . $categoria_descuento . "</p>";
}
?>