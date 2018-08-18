<?php
// PUNTO 5
$funcionesEjecutadas = 0;

// PUNTO 3
$numeroMagico = 8;
// FIN


// PUNTO 1
    $a = 0;
    $b = 0;
    function mayor ($a, $b, $numeroMagico) {
        global $funcionesEjecutadas;
        $funcionesEjecutadas = $funcionesEjecutadas++;
        if ($numeroMagico > $a && $numeroMagico > $b) {
             echo "El número mágico " . $numeroMagico . " es mayor que " . $a . " y " . $b;
        } elseif ($numeroMagico > $a && $numeroMagico < $b) {
             echo "El número mágico " . $numeroMagico . "     es mayor que " . $a . " y menor que " . $b;
        } elseif ($numeroMagico > $b && $numeroMagico < $a) {
             echo "El número mágico " . $numeroMagico . " es mayor que " . $b . " y menor que " . $a;
        } else {
             echo "El número mágico " . $numeroMagico . " no es mayor que " . $a . " y " . $b . " al mismo tiempo";            
        }
     return $funcionesEjecutadas;
    }
    // echo mayor (4, 9, $numeroMagico);
    // echo "<hr>";
// FIN



// PUNTO 2
    
    function tabla ($base, $numeroMagico) {
        for ($i = $base; $i <= $numeroMagico; $i++) {
            $secuencia [] = $i;
        }
        foreach ($secuencia as $valor) {
            echo "$valor";
            echo "<br>";
        }
    }
    // echo tabla (4, $numeroMagico);
    // echo "<hr>";
// FIN







// echo "Hola Mundo \n" ; 
// $nombre = readline("indique su nombre: ");
// $edad = readline("indique su edad: ");
// if ($edad < 18) {
//     echo "No está autorizado a ingresar \n";
//     exit;
// }
// echo "su nombre es: $nombre \ny su edad es: $edad \n";
// echo "Validación exitosa \n";
// ?>