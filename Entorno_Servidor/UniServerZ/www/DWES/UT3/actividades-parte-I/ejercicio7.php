<?php

/*********************************************************************

7. Crea una matriz (array bidimensional indexado) de 3x3 componentes de 
   tipo entero. Sus valores serán, por ejemplo, los siguientes:
    2 3 5
    1 4 7
    0 1 6
    A continuación:
    - Visualizarla
    - Comprueba que es identidad. Indica el resultado de la comprobación con un mensaje.
    - Sumar los elementos de sus filas y almacenarlos en un array unidimensional. Visualiza el array obtenido.
    - Sumar los elementos de sus columnas y almacenarlos en otro array unidimensional. Visualiza el array obtenido.
    - Inicializa una variable de tipo entero a un valor entero. Busca el valor en el array bidimensional. Si se
      encuentra, mostrar un mensaje indicando la posición del array (fila y columna) y si no se encuentra,
      mostrar un mensaje indicándolo y finalizar la búsqueda.

 *********************************************************************/

$matriz = array(
    array(2, 3, 5),
    array(1, 4, 7),
    array(0, 1, 6)
);


//Visualizarla
//OPCIÓN A
for ($i = 0; $i < count($matriz); $i++) {

    for ($j = 0; $j < count($matriz[$i]); $j++) {

        echo $matriz[$i][$j] . " ";

    }

    echo "<br>";

}

//OPCIÓN B
foreach ($matriz as $fila) {

    foreach ($fila as $componente) {

        echo $componente . " ";

    }

    echo "<br>";

}



//Comprueba que es identidad. Indica el resultado de la comprobación con un mensaje.
$esIdentidad = true;

for ($i = 0; $i < count($matriz); $i++) {

    for ($j = 0; $j < count($matriz[$i]); $j++) {

        //La diagonal principal ($i == $j) debe tener unos y el resto, ceros.
        if (($i == $j && $matriz[$i][$j] != 1) || ($i != $j && $matriz[$i][$j] != 0)) {

            $esIdentidad = false;
            break 2; //Salimos de los dos bucles porque ya sabemos que no es identidad.

        }

    }

}

if ($esIdentidad) {

    echo "La matriz es identidad.<br>";

} else {

    echo "La matriz no es identidad.<br>";

}



//Sumar los elementos de sus filas y almacenarlos en un array unidimensional. Visualiza el array obtenido.

?>