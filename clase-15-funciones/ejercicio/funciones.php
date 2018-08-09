<?php
echo "Hola Mundo \n" ; 
$nombre = readline("indique su nombre: ");
$edad = readline("indique su edad: ");
if ($edad < 18) {
    echo "No está autorizado a ingresar \n";
    exit;
}
echo "su nombre es: $nombre \ny su edad es: $edad \n";
echo "Validación exitosa \n";
?>