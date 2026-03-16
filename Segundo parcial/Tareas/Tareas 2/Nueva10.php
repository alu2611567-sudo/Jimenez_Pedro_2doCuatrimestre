<?php
// 10.Crea un formulario que pida un número de tarjeta de crédito (Solo los dígitos, sin espacios ni guiones). Al enviar el formulario, verifica lo siguiente: a. Si tiene exactamente 16 caracteres. b. Si todos los caracteres son dígitos numéricos (Puedes usar ctype_digit()). c. Si ambas condiciones se cumplen, muestra el número formateado engrupos de 4 separados por espacio, por ejemplo: 1234 5678 9012 3456 d. Muestra una versión, donde los primeros 12 dígitos se remplacen por ateísticos y solo se muestren los últimos 4, por ejemplo: **** **** **** 3456
if ($_POST) {
    $tarjeta = $_POST['tarjeta'];
    
    // Verificar si tiene exactamente 16 caracteres
    if (strlen($tarjeta) !== 16) {
        echo "<p style='color: red;'>El número de tarjeta debe tener exactamente 16 dígitos.</p>";
        exit;
    }

    // Verificar si el número de tarjeta comienza con un dígito válido (4, 5 o 6)
    if (!in_array($tarjeta[0], ['4', '5', '6'])) {
        echo "<p style='color: red;'>El número de tarjeta debe comenzar con 4, 5 o 6.</p>";
        exit;
    }

    // Verificar si el número de tarjeta no contiene caracteres repetidos consecutivos más de 3 veces
    if (preg_match('/(\d)\1{3}/', $tarjeta)) {
        echo "<p style='color: red;'>El número de tarjeta no debe contener caracteres repetidos consecutivos más de 3 veces.</p>";
        exit;
    }
    
    // Verificar si todos los caracteres son dígitos numéricos
    if (!ctype_digit($tarjeta)) {
        echo "<p style='color: red;'>El número de tarjeta debe contener solo dígitos numéricos.</p>";
        exit;
    }
    
    // Mostrar el número formateado en grupos de 4
    $tarjeta_formateada = substr($tarjeta, 0, 4) . ' ' . substr($tarjeta, 4, 4) . ' ' . substr($tarjeta, 8, 4) . ' ' . substr($tarjeta, 12, 4);
    echo "<p>Número de tarjeta formateado: " . $tarjeta_formateada . "</p>";
    
    // Mostrar la versión con los primeros 12 dígitos reemplazados por asteriscos
    $tarjeta_oculta = '**** **** **** ' . substr($tarjeta, -4);
    echo "<p>Número de tarjeta oculta: " . $tarjeta_oculta . "</p>";
}
?>