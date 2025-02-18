<?php
# false && false == false
#false && true == false
#true && false ==false
#true && true ==false

$valor_1=7;
$valor_2=2;

#var_dump($valor_1==7 && 2>1  );

#var_dump($valor_1==4||1>3 ||$valor_2>10  );

#devuelve el valor de lo contrario 
$resultado=!($valor_1<=$valor_2);
var_dump($resultado);