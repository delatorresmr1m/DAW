<?php
/***************************************************************************
 * 
 4. Construir un array de 5 componentes de tipo int (valores 
    positivos y negativos). A continuación:
    - Muestra el número de componentes negativas.
    - Muestra la media de las componentes.
    - Visualiza las posiciones del array en las que se almacene 
      como valor el cuadrado de su posición. Si no se da esta 
      circunstancia en ninguna componente, indícalo con un sencillo mensaje.
    - Visualizar el array en orden invertido.
    - Crear un nuevo array cuyos componentes tomarán como valor el doble 
      de los componentes de este primer array.
    - Incrementa en dos más sus componentes y calcula de nuevo la media de ellas.
*
 **************************************************************************/

$a = [5, -1, 3, -9, 7];


//Muestra el número de componentes negativas
$cantidadDeNegativos = 0;

for ($i = 0; $i < count($a); $i++) {

  if ($a[$i] < 0) {
    $cantidadDeNegativos++;
  }

}

echo "Hay $cantidadDeNegativos componentes negativos. <br>";




//Muestra la media de las componentes
$sumaDeElementos = 0;
$mediaDeComponentes;

for ($i = 0; $i < count($a); $i++) {

  $sumaDeElementos += $a[$i];

}

$mediaDeComponentes = $sumaDeElementos / count($a);

echo "<br> La media de los componentes es de: $mediaDeComponentes <br>";




/*
Visualiza las posiciones del array en las que se almacene 
como valor el cuadrado de su posición. Si no se da esta 
circunstancia en ninguna componente, indícalo con un sencillo mensaje.
*/

?>