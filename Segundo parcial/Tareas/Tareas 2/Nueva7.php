<?php
// 7. Crea un formulario que pida: a. Litros de gasolina cargados. b. Precio por litro (En pesos). c. Kilómetros recorridos con esa carga. d. Un presupuesto adicional disponible (en pesos) para cargar más gasolina. Al enviar el formulario, calcula y muestra: a. El costo total de la carga actual. (litros x precio por litro) b. El rendimiento del vehículo en km/litro (kilómetros / litros), formatea con 2 decimales. c. El costo por kilómetro recorrido (costo total / kilómetros), formatea con 2 decimales. d. Cuántos litros adicionales se pueden comprar con el presupuesto extra y cuántos kilómetros adicionales podría recorrer.

if ($_POST) {
    $litros_cargados = $_POST['litros_cargados'];
    $precio_por_litro = $_POST['precio_por_litro'];
    $kilometros_recorridos = $_POST['kilometros_recorridos'];
    $presupuesto_adicional = $_POST['presupuesto_adicional'];

    // Calcular el costo total de la carga actual
    $costo_total = $litros_cargados * $precio_por_litro;

    // Calcular el rendimiento del vehículo
    $rendimiento = $kilometros_recorridos / $litros_cargados;

    // Calcular el costo por kilómetro recorrido
    $costo_por_kilometro = $costo_total / $kilometros_recorridos;

    // Calcular cuántos litros adicionales se pueden comprar con el presupuesto extra
    $litros_adicionales = $presupuesto_adicional / $precio_por_litro;

    // Calcular cuántos kilómetros adicionales podría recorrer
    $kilometros_adicionales = $litros_adicionales * $rendimiento;
}

?>