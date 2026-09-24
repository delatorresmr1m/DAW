<?php

/**********************************************************************
    4.-Simula una calculadora básica(sumar, restar, dividir y multiplicar).
    Inicializa dos variables numéricas a un valor y una variable string a un
    carácter (+,-,/,x).
    Visualiza el resultado.
**********************************************************************/

$valor1 = 2;
$valor2 = 3;
$operando = "x";

$mensaje = "La variable \"\$valor1\" tiene un valor de $valor1 y la variable \"\$valor2\" tiene un valor de $valor2<br>";

switch ($operando) {
    case "+":
        $mensaje .= "El resultado de la suma es: " . ($valor1 + $valor2);
        break;
    case "-":
        $mensaje .= "El resultado de la resta es: " . ($valor1 - $valor2);
        break;
    case "x":
        $mensaje .= "El resultado de la multiplicación es: " . ($valor1 * $valor2);
        break;
    case "/":
        if ($valor2 != 0) {
            $mensaje .= "El resultado de la división es: " . ($valor1 / $valor2);
        } else {
            $mensaje .= "Error: División por cero";
        }
        break;
    default:
        $mensaje = "Operando no válido";
}

echo $mensaje;

?>
