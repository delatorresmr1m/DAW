<?php

/**********************************************************************
5.-Muestra en pantalla la tabla de multiplicar de un número previamente
inicializado a un valor entero.
**********************************************************************/

$numero = 5;

for ($i = 0; $i <= 10; $i++) {

    $resultado = $numero * $i;
    echo "$numero * $i = $resultado<br>";

}
?>