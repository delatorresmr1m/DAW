<?php

/*
 * VARIABLES DINÁMICAS O «VARIABLES VARIABLES» EN PHP
 *
 * Una variable tiene un nombre y almacena un valor. Por ejemplo, en
 * $ciudad = 'burgos', el nombre es ciudad y el valor es la cadena 'burgos'.
 *
 * PHP permite calcular el nombre de una variable durante la ejecución.
 * Una forma de hacerlo es ${expresión}: PHP evalúa la expresión situada
 * entre llaves y utiliza su resultado como nombre de la variable.
 * El nombre calculado no incluye el signo $.
 *
 * Ejemplo equivalente para entender la sintaxis:
 *     $nombre = 'ciudadesCopia0';
 *     $$nombre = 'burgos';
 *     // Ahora existe $ciudadesCopia0 y contiene 'burgos'.
 *
 * $$nombre y ${$nombre} acceden a la variable cuyo nombre contiene $nombre.
 * En este archivo se usa una expresión entre llaves para construir ese
 * nombre combinando el texto "ciudadesCopia" con el contador del bucle.
 * Aquí «dinámica» significa que el nombre se determina durante la ejecución.
 *
 * El objetivo del código es copiar los cuatro valores de un array en
 * cuatro variables independientes: $ciudadesCopia0, $ciudadesCopia1,
 * $ciudadesCopia2 y $ciudadesCopia3, y mostrar su contenido.
 */

/*
 * 1. ARRAY DE ORIGEN
 * array(...) crea un array; también se podría escribir con [...].
 * Como no se indican claves, PHP asigna índices enteros desde 0:
 *     $ciudades[0] = 'burgos'
 *     $ciudades[1] = 'madrid'
 *     $ciudades[2] = 'lugo'
 *     $ciudades[3] = 'soria'
 * $ciudades es un array y cada uno de estos elementos es un string.
 */
$ciudades = array('burgos', 'madrid', 'lugo', 'soria');

/*
 * 2. BUCLE QUE CREA CUATRO VARIABLES ESCALARES
 * Cada variable creada contendrá una cadena, que es un valor escalar.
 *
 * El for tiene tres partes:
 * - $i = 0: inicializa el contador una sola vez, antes de la primera vuelta.
 * - $i < 4: comprueba antes de cada vuelta si se debe ejecutar el cuerpo.
 * - $i++: aumenta el contador en uno al terminar cada vuelta.
 *
 * El cuerpo se ejecuta con $i igual a 0, 1, 2 y 3. Después, $i pasa a 4,
 * la condición es falsa y el bucle termina sin acceder a $ciudades[4].
 * El límite 4 está fijado para este array de cuatro elementos. Si esta
 * lista cambiase de tamaño manteniendo índices consecutivos desde 0,
 * count($ciudades) permitiría obtener su número de elementos.
 */
for ($i = 0; $i < 4; $i++) {
    /*
     * 3. CONSTRUCCIÓN DEL NOMBRE Y ASIGNACIÓN DEL VALOR
     * El punto (.) concatena texto. Con $i = 0, "ciudadesCopia" . $i
     * produce la cadena "ciudadesCopia0"; PHP convierte el número en texto
     * para concatenarlo. ${...} usa ese nombre para acceder a la variable.
     *
     * A la derecha de =, $ciudades[$i] obtiene el elemento del array
     * cuyo índice es el valor actual de $i. = asigna ese valor a la
     * variable dinámica de la izquierda y la crea si todavía no existe.
     *
     * Las cuatro vueltas equivalen a estas asignaciones:
     *     $ciudadesCopia0 = $ciudades[0]; // 'burgos'
     *     $ciudadesCopia1 = $ciudades[1]; // 'madrid'
     *     $ciudadesCopia2 = $ciudades[2]; // 'lugo'
     *     $ciudadesCopia3 = $ciudades[3]; // 'soria'
     *
     * En $ciudadesCopia0, el 0 forma parte del nombre de la variable.
     * En $ciudades[0], los corchetes indican un índice del array.
     * La asignación copia el valor sin crear una referencia al elemento:
     * cambiar después $ciudadesCopia0 no modificaría $ciudades[0].
     */
    ${"ciudadesCopia" . $i} = $ciudades[$i];

    /*
     * 4. INSPECCIÓN DE LA VARIABLE CREADA EN ESTA VUELTA
     * Se vuelve a calcular el mismo nombre para leer su valor.
     * var_dump() muestra el tipo y el contenido; para un string también
     * muestra su longitud en bytes. En estos nombres, todos los caracteres
     * ocupan un byte, por lo que la longitud coincide con el número de letras.
     * Con $i = 0 imprime: string(6) "burgos".
     * Con $i = 1, 2 y 3 imprime respectivamente:
     * string(6) "madrid", string(4) "lugo" y string(5) "soria".
     */
    var_dump(${"ciudadesCopia" . $i});

    /*
     * 5. SALIDA PARA EL NAVEGADOR
     * echo muestra el valor de esa misma variable y concatena "<br>".
     * En la primera vuelta genera burgos<br>; en las siguientes genera
     * madrid<br>, lugo<br> y soria<br>.
     * El navegador interpreta <br> como un salto de línea; en una terminal
     * se ve el texto literal <br>. echo no añade información sobre el tipo.
     * Cada ciudad aparece dos veces dentro de su vuelta: en var_dump y echo.
     */
    echo ${"ciudadesCopia" . $i} . "<br>";
}

/*
 * 6. ACCESO A LAS VARIABLES DESPUÉS DEL BUCLE
 * Un for no crea un ámbito de variables propio en PHP. Las variables
 * creadas siguen disponibles en el ámbito donde se ejecutó el bucle.
 * Aquí podemos usar directamente sus nombres, sin volver a construirlos.
 *
 * Estos var_dump muestran de nuevo, en este orden:
 *     string(6) "burgos"
 *     string(6) "madrid"
 *     string(4) "lugo"
 *     string(5) "soria"
 *
 * En total se ejecutan ocho var_dump: cuatro dentro del bucle y cuatro
 * después. También se ejecuta echo cuatro veces. $ciudades conserva sus
 * valores originales y el contador $i termina con el valor 4.
 *
 * Este ejemplo permite practicar nombres de variables calculados.
 * Para gestionar una lista de ciudades suele resultar más sencillo
 * conservar un array y acceder a sus elementos mediante sus índices.
 */
var_dump($ciudadesCopia0);
var_dump($ciudadesCopia1);
var_dump($ciudadesCopia2);
var_dump($ciudadesCopia3);
?>
