<?php

/**********************************************************************
4.-Simula una calculadora básica(sumar, restar, dividir y multiplicar). 
Inicializa dos variables numéricas a un valor y una variable string a un 
carácter (+,-,/,x).
Visualiza el resultado.
**********************************************************************/

$valor1 = 2;
$valor2 = 3;
$operando = "+";

switch ($operando) {
    case "+":
        echo "La variable \"\$valor1\" tiene un valor de $valor1 y la variable \"\$valor2\" tiene un valor de $valor2<br>";
        echo "El resultado de la suma es: " . ($valor1 + $valor2);
        break;
    case "-":
        echo "La variable \"\$valor1\" tiene un valor de $valor1 y la variable \"\$valor2\" tiene un valor de $valor2<br>";
        echo "El resultado de la resta es: " . ($valor1 - $valor2);
        break;
    case "*":
        echo "La variable \"\$valor1\" tiene un valor de $valor1 y la variable \"\$valor2\" tiene un valor de $valor2<br>";
        echo "El resultado de la multiplicación es: " . ($valor1 * $valor2);
        break;
    case "/":
        echo "La variable \"\$valor1\" tiene un valor de $valor1 y la variable \"\$valor2\" tiene un valor de $valor2<br>";
        if ($valor2 != 0) {
            echo "El resultado de la división es: " . ($valor1 / $valor2);
        } else {
            echo "Error: División por cero";
        }
        break;
    default:
        echo "Operando no válido";
}


?>