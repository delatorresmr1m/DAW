<?php

/**************************************************
 Mostrar las horas lectivas de DWES en cada día de
 la semana.
**************************************************/

$entornoServidor = [

    'Lunes' => 2,
    'Martes' => 0,
    'Miércoles' => 2,
    'Jueves' => 2,
    'Viernes' => 2,
    'Sábado' => 0,
    'Domingo' => 0

];


foreach ($entornoServidor as $diaDeLaSemana => $horasLectivas) {

    echo "$diaDeLaSemana: Tenemos $horasLectivas horas del módulo Entorno Servidor. <br>";



}


echo "<br><br>";


//Mostrar qué días de la semana no hay horas lectivas de DWES
foreach ($entornoServidor as $diaDeLaSemana => $horasLectivas) {

    if ($horasLectivas == 0 && $diaDeLaSemana !== "Sábado" && $diaDeLaSemana !== "Domingo") {
        echo "El $diaDeLaSemana no tenemos horas lectivas de DWES <br>";
    }

}

echo "<br><br>";


//Mostrar cuántas horas lectivas tenemos de cada módulo
$modulos = [

    'Entorno Cliente' => 7,
    'Entorno Servidor' => 8,
    'Diseño de Interfaces Web' => 5,
    'Despliegue de Aplicaciones Web' => 3,
    'Sostenibilidad' => 1,
    'Digitalización' => 1,
    'Servicios y Procesos' => 3,
    'Itinerario para la empleabilidad II' => 2

];



//Mostrar el nombre del módulo con más horas y el total de horas lectivas

$moduloConMasHoras;
$horasDelMayorModulo = 0;
$totalHoras;

foreach ($modulos as $modulo => $horas) {

    if ($horas > $horasDelMayorModulo) {
        $moduloConMasHoras = $modulo;
        $horasDelMayorModulo = $horas;
    }

    $totalHoras += $horas;

}

echo "El módulo con más horas es $moduloConMasHoras <br>";
echo "El número total de horas lectivas es de $totalHoras horas<br>";


echo "<br><br>";


// Array asociativo bidimensional
$modulosDe1y2 = [

    'primero' => [

        'Lenguajes de marcas' => 3,
        'Sistemas informáticos' => 5,
        'Bases de datos' => 5,
        'Programación' => 8,
        'Entornos de desarrollo' => 2,
        'Inglés profesional' => 2,
        'Itinerario personal para la empleabilidad I' => 3,
        'Módulo optativo I' => 2
    ],

    'segundo' => [
        'Entorno Cliente' => 7,
        'Entorno Servidor' => 8,
        'Diseño de Interfaces Web' => 5,
        'Despliegue de Aplicaciones Web' => 3,
        'Sostenibilidad' => 1,
        'Digitalización' => 1,
        'Servicios y Procesos' => 3,
        'Itinerario para la empleabilidad II' => 2
    ]

];
?>