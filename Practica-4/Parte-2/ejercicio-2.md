Ejercicio 2:
En cada caso, indicar las salidas correspondientes:

Inciso a)
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12]; 
?>

Salida 
bar1

Inciso b)
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6]; 
echo $matriz["unamatriz"][13]; 
echo $matriz["unamatriz"]["a"];
?>

Salida
5942

Inciso c)
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56; 
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?> 

No hay ninguna salida por pantalla



