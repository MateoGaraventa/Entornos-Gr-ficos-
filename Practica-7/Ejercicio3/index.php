<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    // Comprobar si se ha enviado el formulario
    if(isset($_POST['submit'])) {
        // Obtener el nombre de usuario ingresado
        $username = $_POST['username'];

        // Crear la cookie con el nombre de usuario
        setcookie('username', $username, time() + (86400 * 30), '/'); // La cookie expirará en 30 días

        // Mostrar el último nombre de usuario ingresado
        echo "Último nombre de usuario ingresado: " . $_COOKIE['username'];
    }
    ?>

    <form method="POST" action="">
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <input type="submit" name="submit" value="Guardar">
    </form>
</body>
</html>