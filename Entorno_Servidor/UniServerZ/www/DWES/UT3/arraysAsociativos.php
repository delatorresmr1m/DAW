<?php

/*****************************************************
 Hay dos formas de declarar los arrays asociativos
*****************************************************/

$ganadores = [

    'Tenis' => 'María Alonso',
    'Ajedrez' => 'Antonio López',
    'Pin-pon' => 'Ana Benito',
    'Mus' => 'Luis Martín'

];

$ganadores = array(

    'Tenis' => 'María Alonso',
    'Ajedrez' => 'Antonio López',
    'Pin-pon' => 'Ana Benito',
    'Mus' => 'Luis Martín'

);



/******************************************************
 Hay tres formas de recorrer un array asociativo. Todas
 se hacen con "foreach" pero de maneras diferentes.
******************************************************/

//Primera manera
foreach ($ganadores as $ganador) {

    echo $ganador . "<br>";

}

//Segunda manera
foreach ($ganadores as $clave => $ganador) {

    echo $ganador . "<br>";

}

//Tercera manera
foreach ($ganadores as $clave => $ganador) {

    echo $ganadores[$clave] . "<br>";

}

//Mostar las etiquetas de cada elemento del array
foreach ($ganadores as $clave => $ganador) {

    echo $clave . "<br>";

}
?>