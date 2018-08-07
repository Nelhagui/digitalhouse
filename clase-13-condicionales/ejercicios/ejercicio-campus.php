<?php
// PUNTO 1
    echo "<h2>Punto 1</h2>";

    $numero1 = 16;
    $numero2 = 26;

    if ($numero1 > $numero2) {
        echo "<h1>El número mayor es $numero1</h1>";
    } else {
        echo "<h1>El número mayor es $numero2</h1>";
    }
    echo "<hr>";
// FIN

// PUNTO 2
    echo "<h2>Punto 2</h2>";
    echo "<br>";

    $varia = rand (1, 5);
    if ($varia == 3 || $varia == 5) {
        echo $varia;
    }
    echo "<hr>"; 
// FIN

// PUNTO 3
echo "<h2>Punto 3</h2>";
echo "<br>";

$varia = rand (1, 5);
if ($varia == 3 ) {
    echo $varia;
} else {
    echo "<h2>El número NO es 3</h2>";
}
echo "<hr>"; 
// FIN

// PUNTO 4
echo "<h2>Punto 4</h2>";
echo "<br>";

$varia = rand (1, 100);
if ($varia > 50 ) {
    echo $varia;
} else {
    echo "<h2>El número NO es 3</h2>";
}
echo "<hr>"; 
// FIN


?>