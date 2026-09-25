<?php

$COLUMNAS = 4;
$ultimoNumero = 1;
for ($i = 1; $i <= $COLUMNAS; $i++) {

    for ($a = 0; $a < $i; $a++) {
        echo "$ultimoNumero ";
        $ultimoNumero++;
    }

    echo "<br>";

}

?>