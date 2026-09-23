<?php

/**********************************************************************
2.-Inicializa 5 variables numéricas al valor que tú quieras y:
a) Visualiza cuál es el mayor
b) Visualiza el número de máximos
**********************************************************************/

// En ejercicio2.php se busca el mayor de tres valores y después se cuentan sus apariciones.
// Aquí se revisan cinco valores con un while y se hacen las dos cosas a la vez.

// Cinco números guardados en variables con nombres consecutivos: valor1, valor2...
$valor1 = 20;
$valor2 = 20;
$valor3 = 10;
$valor4 = 30;
$valor5 = 30;

// Partimos del primer valor como mayor. Ya lo hemos contado una vez.
$contMax = 1;
$mayor = $valor1;

// Empezamos por el segundo valor porque el primero ya se ha tenido en cuenta.
$cont = 2;

// Revisamos desde $valor2 hasta $valor5, una variable en cada vuelta.
while ($cont <= 5) {

    // El punto une "valor" con el contador: si $cont vale 2, se forma "valor2".
    // ${"valor" . $cont} lee la variable con ese nombre, en este caso $valor2.
    // Solo entramos si el valor revisado iguala o supera al mayor actual.
    // Si es menor, no cambiamos ni el mayor ni su número de apariciones.
    if ($mayor <= ${"valor" . $cont}) {
        // Si empata con el mayor, contamos una aparición más.
        if ($mayor == ${"valor" . $cont}) {
            $contMax++;
        } else {
            // Si hemos entrado y no son iguales, el valor revisado es mayor.
            $mayor = ${"valor" . $cont};
            // Reiniciamos la cuenta: el nuevo mayor ha aparecido una vez.
            // Las apariciones del máximo anterior ya no cuentan.
            $contMax = 1;
        }
    }
    // Pasamos a la siguiente variable. Cuando $cont llega a 6, termina el while.
    $cont++;

}

// Con estos valores, el máximo es 30 y aparece 2 veces ($valor4 y $valor5).
echo "El máximo es $mayor y aparece $contMax";

?>
