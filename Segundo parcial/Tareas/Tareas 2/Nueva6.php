<?php
// 6. Crea un formulario que pida: a. Un monto en pesos mexicanos (MXN) a convertir. b. El tipo de cambio actual: Cuántos pesos equivalen a 1 dólar (USD). c. El tipo de cambio actual: Cuántos pesos equivalen a 1 euro (EUR). Al enviar el formulario, muestra: a. El monto original en pesos. b. El equivalente en dólares formateado a 2 decimales. c. El equivalente en euros formateado con 2 decimales. d. Cuantas unidades de cada moneda se pueden obtener con exactamente 100 pesos.
if ($_POST) {
    $monto_mxn = $_POST['monto_mxn'];
    $tipo_cambio_usd = $_POST['tipo_cambio_usd'];
    $tipo_cambio_eur = $_POST['tipo_cambio_eur'];

    // Calcular el equivalente en dólares y euros
    $equivalente_usd = $monto_mxn / $tipo_cambio_usd;
    $equivalente_eur = $monto_mxn / $tipo_cambio_eur;

    // Calcular cuantas unidades de cada moneda se pueden obtener con 100 pesos
    $unidades_usd_con_100_pesos = 100 / $tipo_cambio_usd;
    $unidades_eur_con_100_pesos = 100 / $tipo_cambio_eur;
}
?>