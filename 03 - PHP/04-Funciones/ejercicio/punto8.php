<?php
// READLINE NOMBRE Y EDAD
    echo "\n";
    echo "Hola Mundo \n";
    echo "\n";
    $nombre = readline("Ingrese su Nombre: \n");
    echo "\n";
    $edad = readline("Ingrese su Edad: \n");
    echo "\n";

// EDAD VERIFICACIÓN E INGRESO SATISFACTORIO
    if ($edad < 18) {
        echo "No está autorizado a ingresar, es muy peque. \n";
        echo "\n";
        exit;
    } else {
        echo "Bienvenido $nombre, Ingreso satisfactorio. \n";
        echo "\n";
    }

// HOBBY VÁLIDO FUNCIÓN

    function hobbyValido ($stri) {
        if (strlen($stri) >= 3 && strlen($stri) <= 15) {
            $valor = true;
        }
        return $false;
    }
    
// PEDIDO DE HOBBIES

$hobbies = readline('Ingrese hobbies separados por ", " (ej. Futbol, Voley, Paracaidismo...): ');

?>