<?php
$nombre = "Ruben";
$edad=25;
?>  
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variables</title>
        <style>
            body {
                background-color: #333;
                color: #fff;
            }
        </style>
    </head>
    <body>
<?php

    echo "<strong>Nombre:</strong> $nombre <br> con negrita y color blanco <br>";
    echo "<strong>Edad:</strong> $edad <br> con negrita y color blanco <br>";

    /*********************************************************************
    Declaramos variables con el signo $ seguido del nombre de la variable, 
    el cual puede contener letras, números y guiones bajos. No puede empezar 
    con un número.
    ************************************************************************/
?>
    </body>
</html>
