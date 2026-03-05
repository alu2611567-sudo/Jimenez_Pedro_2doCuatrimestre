<?php
// 2. Crea un formulario que solicite el nombre de un producto y su precio sin IVA. Al enviar el formulario, se deberá calcular el IVA y mostrar lo siguiente: a. El monto del IVA (16%). b. El precio total con IVA incluido.
// Muestra los resultados en pantalla.
if ($_POST) {
    $nombre = $_POST['nombre'];
    $precio_sin_iva = $_POST['precio_sin_iva'];
    
    // Calcular el IVA (16%)
    $iva = $precio_sin_iva * 0.16;
    
    // Calcular el precio total con IVA
    $precio_total = $precio_sin_iva + $iva;
}
?>

<form method="post">
    <label for="nombre">Nombre del producto:</label>
    <input type="text" id="nombre" name="nombre" required>
    <label for="precio_sin_iva">Precio sin IVA:</label>
    <input type="number" id="precio_sin_iva" name="precio_sin_iva" step="0.01" required>
    <button type="submit">Enviar</button>
</form>

<?php
if (isset($iva) && isset($precio_total)) {
    echo "<p>El monto del IVA es: $" . number_format($iva, 2) . "</p>";
    echo "<p>El precio total con IVA es: $" . number_format($precio_total, 2) . "</p>";
}
?>