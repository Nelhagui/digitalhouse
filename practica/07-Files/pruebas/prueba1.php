<?php
$archivo = 'texto.txt';

if (file_exists($archivo)) {
    $mensaje = 'el archivo ha sido modificado';
} else {
    $mensaje ='el archivo se ha creado';
}

