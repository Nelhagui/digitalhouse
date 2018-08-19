<?php

function validarErrores ($datos) {
    if (trim($datos[nombre]=="")) {
        $errores[nombre] = "Ingrese un nombre válido";
    }
    if (trim($datos[apellido]=="")) {
        $errores[apellido] = "Ingrese un apellido válido";
    }
    if (!is_numeric($datos[edad])) {
        $errores[edad] = "Ingrese una edad válida";
    }
    if (!filter_var($datos[email], FILTER_VALIDATE_EMAIL)) {
        $errores[email] = "Ingrese un email válido";
    }
    return $errores;
}

function perseverancia ($datos) {
    $valor = $_POST[$datos];
    return $valor;
}
