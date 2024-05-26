Ejercicio 4 
- Contar las páginas visitadas por un usuario durante su sesión

<?php
sessiion_start();
if (isset($_SESSION['contador'])) {
  $_SESSION['contador'] = 1;
} else {
  $_SESSION['contador']++;
}

echo '<p>Has visitado la página ' . $_SESSION['contador'] . ' veces</p>';
?>
<a href="ejercicio-4.php">Recargar Página</a>
<a href="borrarsesion.php">Borrar Sesión</a>
?>