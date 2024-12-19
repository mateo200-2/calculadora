<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los valores enviados desde el formulario
    $numero1 = $_POST['numero1']; // Primer número
    $numero2 = $_POST['numero2']; // Segundo número
    $operacion = $_POST['operacion']; // Tipo de operación seleccionada

    // Variable para almacenar el resultado
    $resultado = null;

    // Validar que el segundo número no sea cero si la operación es división
    if ($operacion == "division" && $numero2 == 0) {
        $resultado = "Error: No se puede dividir entre cero.";
    } else {
        // Realizar la operación según lo seleccionado
        switch ($operacion) {
            case "suma":
                $resultado = $numero1 + $numero2;
                break;
            case "resta":
                $resultado = $numero1 - $numero2;
                break;
            case "multiplicacion":
                $resultado = $numero1 * $numero2;
                break;
            case "division":
                $resultado = $numero1 / $numero2;
                break;
            default:
                $resultado = "Operación no válida.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Calculadora</title>
    <!-- Estilos básicos -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }

        .resultado {
            font-size: 20px;
            margin: 20px 0;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultado de la Operación</h1>
        <!-- Mostrar el resultado si existe -->
        <?php if (isset($resultado)): ?>
            <p class="resultado"><?= htmlspecialchars($resultado); ?></p>
        <?php endif; ?>
        <!-- Enlace para regresar a la calculadora -->
        <a href="index.html">Volver a la Calculadora</a>
    </div>
</body>
</html>
