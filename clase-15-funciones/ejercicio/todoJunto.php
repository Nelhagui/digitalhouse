<?php
include("funciones.php");
include("superficie.php");
global $funcionesEjecutadas;

echo "<h2>\$funcionesEjecutadas = $funcionesEjecutadas </h2>";

function mayorSuperCirculos ($a, $b, $c) {
    $a = suCirculo ($a); /* suCirculo () perteneciente a funcion ubicada en superficie.php */
    $b = suCirculo ($b);
    $c = suCirculo ($c);
    $mayorSuperCirculos = mayor ($a, $b, $c); /* mayor () perteneciente a funcion ubicada en funciones.php */
    // return  $mayorSuperCirculos;
}
echo "Esto es del archivo 'todoJunto.php' que utiliza las funciones de 'funciones.php' y ' superficie.php'";
echo "<hr>";
echo mayorSuperCirculos(2, 5, 1);


// PUNTO 7
echo "<hr>";    
$miCadena = "Me encanta php, a mi también me encanta php";
$miAparicion = "php";
$ubicacion = strpos ($miCadena, $miAparicion);

echo $ubicacion;

?>