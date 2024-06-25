<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<?php
// Comprobamos si la cookie "contador" ya existe
if(isset($_COOKIE['contador'])) {
    // Si la cookie existe, incrementamos su valor en 1
    $contador = $_COOKIE['contador'] + 1;
} else {
    // Si la cookie no existe, establecemos su valor inicial en 1
    $contador = 1;
}

// Establecemos la cookie con el nuevo valor
setcookie('contador', $contador, time() + 3600); // La cookie expirará en 1 hora

// Mostramos el mensaje de bienvenida o el número de veces que se ha visitado la página
if($contador == 1) {
    echo "Bienvenido a la página contador.php";
} else {
    echo "Has visitado esta página $contador veces";
}
?>   
</body>
</html>



