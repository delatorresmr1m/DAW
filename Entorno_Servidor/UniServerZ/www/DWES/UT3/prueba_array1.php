<?php

$a = array(2, "hola", 8);

for ($i = 0; $i < count($a); $i++) {
    echo "$a[$i] <br>";
}
$a[] = 1;
echo "<br>";
var_dump($a);

$numeroElementos = 4;
$numeroElementosCount = count($a);

//Sólo podemos visualizar variables en la función "echo"
echo "<br> Este resultado no se mostrará bien: $numeroElementos / count($a) <br>";

$resultadoDivision = count($a) / $numeroElementos;

echo "<br> Este resultado SÍ se mostrará bien: $resultadoDivision <br>";

?>