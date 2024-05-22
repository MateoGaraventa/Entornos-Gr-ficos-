Ejercicio 1: 
En el siguiente código identificar:
• las variables y su tipo
• los operadores
• las funciones y sus parámetros
• las estructuras de control
• cuál es la salida por pantalla

<?php
function doble($i) {
 return $i*2;
}
$a = TRUE; 
$b = "xyz"; 
$c = 'xyz';
$d = 12; 
echo gettype($a);
echo gettype($b); 
echo gettype($c);
echo gettype($d); 
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f =+ 10;
echo $a, $b, $c, $d, $f , $g;
?> 

Las variables y su tipo
$i, No tiene un tipo definido
$a, Toma un valor Booleano
$b, String
$c, String
$d, Integer
$f, Integer
$g, Integer

Los operadores
$a = TRUE -->Asignacion
$i*2 --> Multiplicacion
$d +=4 --> Suma
$d++ Postincremento
++$d -->Preincremento
$f += 10 -->Asignacion y suma
$a ? ++$d : $d*3; --> Operador ternario

Las funciones y sus parametros 
function doble($i) {}, Su parámetro es $i
gettype(), parametros son $a,$b,$c,$d
is_string($a), parametro es $a
is_int($d), parametro es $d

Las estructuras de control
if(){
}

La salida por pantalla
booleanstringstringinteger1xyzxyz184444
