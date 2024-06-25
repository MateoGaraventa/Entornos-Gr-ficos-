<?php
// Comprobar si se ha seleccionado un titular
if (isset($_POST['titular'])) {
    // Obtener el tipo de titular seleccionado
    $titular = $_POST['titular'];

    // Guardar el tipo de titular en una cookie con una duración de 1 día
    setcookie('titular', $titular, time() + (86400 * 1), '/'); // 86400 segundos = 1 día
} else {
    // Comprobar si la cookie existe
    if (isset($_COOKIE['titular'])) {
        // Obtener el tipo de titular almacenado en la cookie
        $titular = $_COOKIE['titular'];
    } else {
        // Valor por defecto si no se ha seleccionado ningún titular ni se ha almacenado en la cookie
        $titular = 'Noticia política';
    }
}

// Array con los posibles titulares
$titulares = [
    'Noticia política',
    'Noticia económica',
    'Noticia deportiva'
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Periódico</title>
</head>
<body>
    <h1>Periódico</h1>

    <form method="post">
        <?php foreach ($titulares as $t) : ?>
            <input type="radio" name="titular" value="<?php echo $t; ?>" <?php if ($t == $titular) echo 'checked'; ?>>
            <?php echo $t; ?><br>
        <?php endforeach; ?>

        <input type="submit" value="Seleccionar">
    </form>

    <h2><?php echo $titular; ?></h2>

    <a href="borrar_cookie.php">Borrar cookie</a>
</body>
</html>

