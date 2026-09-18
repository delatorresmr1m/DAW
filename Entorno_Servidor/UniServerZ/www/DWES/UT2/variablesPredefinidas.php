<?php



/***************************************************************
Con "$componente" nos referimos a la clave del array asociativo 
$_SERVER, mientras que con "$valor" nos referimos al valor 
correspondiente a esa clave.
***************************************************************/


/*********************************************************************

        *******ARRAYS INDEXADOS, ASOCIATIVOS Y FOREACH*******

    En PHP, un array almacena pares de clave y valor. Los arrays indexados
    y asociativos usan el mismo tipo array; se distinguen por sus claves.

    - Indexados: usan claves numéricas enteras. Al crear una lista sin
    indicar las claves, PHP las asigna desde 0 de forma consecutiva.
    También se pueden indicar índices explícitos y dejar huecos.
    $colores = ["rojo", "verde", "azul"];
    $colores[0] contiene "rojo" y $colores[1] contiene "verde".
    Son útiles para listas de elementos.

    - Asociativos: usan habitualmente claves de texto con un significado.
    $alumno = ["nombre" => "Ana", "curso" => "DAW"];
    $alumno["nombre"] contiene "Ana".
    Son útiles para relacionar cada dato con un nombre descriptivo.
    Un mismo array puede combinar claves enteras y de texto.

    FOREACH permite recorrer ambos tipos de array:

    1. Solo valores: en cada vuelta, $valor recibe el siguiente valor.
    foreach ($colores as $valor) {
        echo $valor; // Recibe "rojo", "verde" y "azul".
    }

    2. Claves y valores: => separa las variables que reciben cada par.
    foreach ($alumno as $clave => $valor) {
        echo "$clave: $valor"; // nombre: Ana y después curso: DAW.
    }
    Esta forma también sirve con $colores: las claves serían 0, 1 y 2.
    La forma de solo valores también sirve con $alumno.

    FOREACH recorre los elementos en el orden de inserción, aunque las
    claves numéricas no sean consecutivas; no ordena por la clave.
    En el ejemplo inferior, $_SERVER es un array asociativo:
    $componente recibe cada clave y $valor recibe el dato correspondiente.
 ********************************************************************/
foreach ($_SERVER as $componente => $valor) {
    echo "<strong>$componente:</strong> $valor <br><br><br>";
}

/*********************************************************************
Las variables superglobales son variables internas de PHP que contienen 
información sobre el servidor, el entorno y la ejecución del script. 
Son accesibles desde cualquier parte del script sin necesidad de 
declararlas previamente.


$_SERVER =>
La variable superglobal $_SERVER contiene información sobre cabeceras, 
rutas y ubicaciones de script. La información es creada por el servidor web.
************************************************************************/
?>