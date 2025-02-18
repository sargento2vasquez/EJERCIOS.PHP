<?php

/*calcular el total que un a persona debe pagar en una llanteria, el precio de cada llanta es
de 800 soles si se compran menos de 5 llantas y de 700 soles si se compran 5 o mas

$valor_llantas=800;
$cantidad=4;

if($cantidad>=5){
    $valor_llantas= 700;
    $valor_llantas=$valor_llantas*$cantidad;

    echo"el valor total es: ".$valor_llantas."";

}else{
    $valor_llantas=$valor_llantas*$cantidad;
    echo "no tiene descuento ".$valor_llantas;

}*/

/*determinar si un alimno aprueba o reprueba un curso , sabiendo que 
aprobara si su promedio de tres clificaciones es mayor o igual a 7.0; reprueba en caso contrario;*/
 
$calificacion_1=6;
$calificacion_2= 8;
$calificacion_3= 9;
$suma=($calificacion_1 + $calificacion_2 + $calificacion_3)/3;
if($suma>=7.0){
    echo "aprueba el curso";

}else{
    echo "desaprueba el curso";
}