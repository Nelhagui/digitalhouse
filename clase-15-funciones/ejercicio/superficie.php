<?php

// PUNTO A
    function superficie ($base, $altura) {
        $superficie = $base * $altura / 2;
        return $superficie;
    }
    // echo "Superfice de un triángulo: " . superficie (4, 40);
    // echo "<hr>";

// PUNTO B
    function superficeRec ($base, $altura) {
        $superficie = $base * $altura;
        return $superficie;
    }
    // echo "Superficie de un rectángulo: " . superficeRec (4, 40);
    // echo "<hr>";

// PUNTO C
    function superficieCua ($base, $altura) {
        $superficie = $base * $altura;
        return $superficie;
    }
    // echo "Superficie de un cuadrado de: " . superficieCua (5, 30);
    // echo "<hr>";

// PUNTO D
    function suCirculo ($radio) {
        $superficie = pi() * $radio**2;
        return $superficie;
    }

?>