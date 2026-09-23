<?php

// Cinco numeros guardados en variables.
$valor1 = 20;
$valor2 = 20;
$valor3 = 10;
$valor4 = 30;
$valor5 = 30;

// a) Buscamos el mayor.
$mayor = $valor1;

if ($valor2 > $mayor) {
    $mayor = $valor2;
}

if ($valor3 > $mayor) {
    $mayor = $valor3;
}

if ($valor4 > $mayor) {
    $mayor = $valor4;
}

if ($valor5 > $mayor) {
    $mayor = $valor5;
}

// b) Contamos cuantas veces aparece el mayor.
$numeroDeMaximos = 0;

if ($valor1 == $mayor) {
    $numeroDeMaximos++;
}

if ($valor2 == $mayor) {
    $numeroDeMaximos++;
}

if ($valor3 == $mayor) {
    $numeroDeMaximos++;
}

if ($valor4 == $mayor) {
    $numeroDeMaximos++;
}

if ($valor5 == $mayor) {
    $numeroDeMaximos++;
}

echo "El mayor es: $mayor<br>";
echo "Numero de maximos: $numeroDeMaximos";

?>
