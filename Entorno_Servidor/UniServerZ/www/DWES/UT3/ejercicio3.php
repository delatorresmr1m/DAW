<?php

/**********************************************************************
3.-Inicializa una variable a un valor entero de tres cifras. 
Determinar si es capicúa.
**********************************************************************/

$numero = 12221;
$restante = $numero;
$invertido = 0;

// Vamos sacando las cifras para construir el número al revés.
while ($restante > 0) {
    // El resto de dividir entre 10 nos da la última cifra.
    $cifra = $restante % 10;

    // Añadimos esa cifra al número invertido.
    $invertido = $invertido * 10 + $cifra;

    // Quitamos la última cifra del número que queda.
    $restante = ($restante - $cifra) / 10;
}

// Si el original y el invertido son iguales, es capicúa.
if ($numero == $invertido) {
    echo "$numero es capicúa";
} else {
    echo "$numero no es capicúa";
}
?>