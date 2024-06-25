<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener el estilo seleccionado por el usuario
        $estilo = $_POST['estilo'];

        // Guardar el estilo en una cookie para recordarlo
        setcookie('estilo', $estilo, time() + (86400 * 30), '/'); // Cookie válida por 30 días
    } else {
        // Verificar si hay una cookie guardada con el estilo
        if (isset($_COOKIE['estilo'])) {
            $estilo = $_COOKIE['estilo'];
        } else {
            $estilo = 'estilo1.css'; // Estilo predeterminado
        }
    }
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $estilo; ?>">
</head>
<body>
    <h1>Página con estilos configurables</h1>

    <form method="POST">
        <label for="estilo">Seleccione un estilo:</label>
        <select name="estilo" id="estilo">
            <option value="estilo1.css">Estilo 1</option>
            <option value="estilo2.css">Estilo 2</option>
            <option value="estilo3.css">Estilo 3</option>
        </select>
        <button type="submit">Guardar</button>
    </form>

    <p>Texto de ejemplo en la página.</p>
</body>
</html>