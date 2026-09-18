<?php
$valor = 50;
$aux = 'producto';

// echo envía texto a la salida y sus paréntesis son opcionales.
// En el navegador, la etiqueta <br> genera un salto de línea.

// Las comillas dobles permiten insertar los valores de $aux y $valor (interpolación).
// Las comillas simples se muestran como texto y \$ imprime el símbolo $.
// Resultado visible: Este 'producto' cuesta 50 $
echo "Este '$aux' cuesta $valor \$ <br>";

// Se interpolan $aux y $valor. Las comillas escapadas (\") se muestran como texto
// sin cerrar la cadena de comillas dobles; \$ imprime el símbolo $.
// Resultado visible: Este "producto" cuesta 50 $
echo "Este \"$aux\" cuesta $valor \$ <br>";

// $aux se interpola, pero \$valor muestra literalmente $valor, sin sustituirlo.
// En \\$, \\ imprime una barra invertida y el $ queda como texto
// porque no va seguido de un nombre de variable.
// Resultado visible: Este producto cuesta $valor \$
echo "Este $aux cuesta \$valor \\$ <br>";

// Se interpolan $aux y $valor; los dos puntos y los espacios son texto normal.
// \$ permite mostrar el símbolo $ después del precio.
// Resultado visible: producto: 50 $
echo "$aux: $valor \$ <br>";

// El punto (.) concatena el valor de $aux con la cadena que empieza por "s".
// Así se forma "productos" sin que PHP intente interpretar una variable $auxs.
// Dentro de la cadena de comillas dobles, $valor se interpola y \$ imprime $.
// Resultado visible: productos: 50 $
echo $aux . "s: $valor \$<br>";
?>