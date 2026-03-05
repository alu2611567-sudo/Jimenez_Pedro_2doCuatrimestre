<?php
// 10.Haz un formulario que solicite el nombre del empleado, su salario por hora y las horas trabajadas en la semana. Posteriormente, calcula y muestra en pantalla: a. Salario base (Primeras 40 horas a tarifa normal). b. Horas extras (Las que excedan 40 se pagan al doble). c. Total bruto (Salario base + horas extras). d. Deducciones (15% del total bruto). e. Salario neto (Total bruto – deducciones)
if ($_POST) {
    $nombre_empleado = $_POST['nombre_empleado'];
    $salario_por_hora = $_POST['salario_por_hora'];
    $horas_trabajadas = $_POST['horas_trabajadas'];

    // Calcular salario base
    if ($horas_trabajadas <= 40) {
        $salario_base = $horas_trabajadas * $salario_por_hora;
        $horas_extras = 0;
    } else {
        $salario_base = 40 * $salario_por_hora;
        $horas_extras = ($horas_trabajadas - 40) * ($salario_por_hora * 2);
    }

    // Calcular total bruto
    $total_bruto = $salario_base + $horas_extras;

    // Calcular deducciones
    $deducciones = $total_bruto * 0.15;

    // Calcular salario neto
    $salario_neto = $total_bruto - $deducciones;
}
?>

<form method="post">
    <label for="nombre_empleado">Nombre del empleado:</label>
    <input type="text" id="nombre_empleado" name="nombre_empleado" required>
    <label for="salario_por_hora">Salario por hora:</label>
    <input type="number" id="salario_por_hora" name="salario_por_hora" step="0.01" required>
    <label for="horas_trabajadas">Horas trabajadas en la semana:</label>
    <input type="number" id="horas_trabajadas" name="horas_trabajadas" step="0.01" required>
    <button type="submit">Enviar</button>
</form>
<?php
if (isset($salario_base) && isset($horas_extras) && isset($total_bruto) && isset($deducciones) && isset($salario_neto)) {
    echo "<p>Salario base: $" . number_format($salario_base, 2) . "</p>";
    echo "<p>Horas extras: $" . number_format($horas_extras, 2) . "</p>";
    echo "<p>Total bruto: $" . number_format($total_bruto, 2) . "</p>";
    echo "<p>Deducciones: $" . number_format($deducciones, 2) . "</p>";
    echo "<p>Salario neto: $" . number_format($salario_neto, 2) . "</p>";
}
?>