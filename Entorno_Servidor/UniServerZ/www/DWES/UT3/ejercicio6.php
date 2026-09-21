<?php
/************************************************
  6.-Muestra en pantalla la suma de los números 
  del 1 al 100 no terminados en 3.
 ***********************************************/

$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 10 != 3) {
        $suma += $i;
        echo "$i + $suma = $suma<br>";
    }
}

echo "La suma de los números del 1 al 100 no terminados en 3 es: $suma";

?>