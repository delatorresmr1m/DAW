<?php

/**********************************************************************
1.-Inicializa dos variables numéricas al valor que tú quieras y 
visualiza cuál es el mayor valor.
**********************************************************************/

$valor1 = 20;
$valor2 = 10;

switch (($valor1 && $valor2) != 0) {
    case ($valor1 > $valor2):
        echo "El valor1 es mayor que el valor2";
        break;
    case ($valor1 < $valor2):
        echo "El valor1 es menor que el valor2";
        break;
    default:
        echo "Los valores son iguales";
}

?>