Ejercicio 1: Completar
Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función

mysqli_connect

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:

$hostname ,$nombreUsuario , $contraseña

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función

mysqli_select_db 

Esta función debe pasar como parámetro

$nombreConexión, $nombreBaseDatos

La función mysqli_query () se utiliza para

hacer consultas a una base de datos 

y requiere como parámetros

$nombreConexion,"Consulta aquí"

La cláusula or die() se utiliza para

capturar el error

y la función mysqli_error () se puede usar para

devuelve el ultimo mensaje de error 

Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo
$vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):


<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila[0]); ?></td>
 <td><?php echo ($fila[1]); ?></td>
 <td><?php echo ($fila[2']); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>

El siguiente codigo va a mostrarme los datos de las columnas de cada fila del array. Libera la memoria asociada al array y cierra la conexion con la base de datos.
