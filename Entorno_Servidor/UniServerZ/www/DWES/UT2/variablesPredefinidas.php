<?php



    /***************************************************************
    Con "$componente" nos referimos a la clave del array asociativo 
    $_SERVER, mientras que con "$valor" nos referimos al valor 
    correspondiente a esa clave.
    ***************************************************************/
    foreach ($_SERVER as $componente => $valor) {
        echo "<strong>$componente:</strong> $valor <br><br>";
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
