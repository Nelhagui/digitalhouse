<?php

$nombre = "Nelson";
$apellido = "Aguiar";
$dni = 12345678;
$monto_deuda = 0;
$cuotas_pagar = null;

// VARIABLES A INGRESAR POR EL USUARIO

    $dia = 7;
    $monto = 8000;
    $cuotas = 3;
    $porcentaje = 10;

// FIN


// VALIDACION DÍA CON SWITCH

    switch ($dia) {
        case "1":
        $dia = "Lunes";
        break;
        case "2":
        $dia = "Martes";
        break;
        case "3":
        $dia = "Miércoles";
        break;
        case "4":
        $dia = "Jueves";
        break;
        case "5":
        $dia = "Viernes";
        break;
        case "6":
        $dia = "Sábado";
        break;
        case "7":
        $dia = "Domingo";
        break;
        default:
        echo "Ingrese un número del 1 al 7 para seleccionar el día."; exit;
    }

// FIN

// VALORES MINIMOS Y MAXIMOS DEL PRESTAMOS

    if ($monto < 1000 || $monto > 72000) {
        echo "<h2>Ingrese un monto entre $1000 y $72000</h2>";
        exit;
    } 

// FIN


// CANTIDAD MINIMA Y MAXIMA DE CUOTAS

    if ($cuotas < 3 || $cuotas > 36 ) {
        echo "<h2>Ingrese un número de cuotas entre 3 y 36 meses</h2>";
        exit;
    }

// FIN

// VALIDANDO TASA DE INTERÉS

    if ($porcentaje !=5 && $porcentaje !=10 && $porcentaje !=15 && $porcentaje !=20) {
        echo "<h2>Las tasas permitidas son de 5%, 10%, 15% y 20%</h2>";
        exit;
    }

// FIN

// CALCULO DE DEUDA

    $monto_deuda = $porcentaje * $monto / 100 + $monto;

// FIN

// MONTO A PAGAR
    $monto_a_pagar = $monto_deuda / $cuotas;

// FIN

// CALCULO DE VALOR DE CUOTAS

for ($i=1; $i <= $cuotas; $i++) {
    $cuotas_pagar [] = $i;
}

// FIN

echo "<h2>Estimado: $nombre $apellido el día de hoy: $dia se le aprobó el crédito de: $monto, a una tasa
        del: $porcentaje%, usted debe cancelar un total en pesos de: $monto_deuda, a razón de: $cuotas cuotas,
        y el valor de cada una es:</h2>";
echo "<br>";

foreach ($cuotas_pagar as $valor) {
    echo "<hr>Nro de la cuota: $valor Monto a pagar: $monto_a_pagar $</hr>";
    echo "<hr>";
    echo "<br>";
}

echo "<h3>Gracias por contratar nuestros servicios, vayase a pedirle más plata a su abuela</h3>";





?>
