Ejercicio 3:
En cada caso, indicar las salidas correspondientes:

Inciso a)
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] 
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>

Salida
La salida depende del dia,hoa,minuto y segundo que en que se ejecute ese código. Tomará los valores de la hora establecida en tu computadora(getdate() devuelce un array con el tiempo actual).

Salida Ejemplo:
Has entrado en esta pagina a las 10 horas, con 11 minutos y 6 segundos, del 21/5/2024

Inciso b)
<?php
function sumar($sumando1,$sumando2){ 
 $suma=$sumando1+$sumando2; 
 echo $sumando1."+".$sumando2."=".$suma; 
} 
sumar(5,6);
?>

Salida
5+6=11

