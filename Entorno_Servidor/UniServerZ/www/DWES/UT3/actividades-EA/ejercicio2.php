<?php

/**********************************************************************
2.-Inicializa tres variables numéricas al valor que tú quieras y:
a) Visualiza cuál es el mayor
b) Visualiza el número de máximos
**********************************************************************/

$valor1 = 20;
$valor2 = 20;
$valor3 = 10;
$numeroDeMaximos = 0;

// a) Buscamos el mayor de los tres valores.
$mayor = $valor1;

if ($valor2 > $mayor) {
    $mayor = $valor2;
}

if ($valor3 > $mayor) {
    $mayor = $valor3;
}

echo "El mayor es: $mayor<br>";

// b) Contamos cuantas veces aparece el mayor.
if ($valor1 == $mayor) {
    $numeroDeMaximos++;
}

if ($valor2 == $mayor) {
    $numeroDeMaximos++;
}

if ($valor3 == $mayor) {
    $numeroDeMaximos++;
}

echo "Numero de maximos: $numeroDeMaximos";
?>