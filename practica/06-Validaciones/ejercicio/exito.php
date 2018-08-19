<?php
echo "<h2>Bienvenidos, el registro se a realizado con éxito</h2>";
echo "<hr>";

$errores = [];
echo $errores;

echo "<hr>";
var_dump($errores);

echo "<hr>";
$nelson="nelson";
$aguiar="aguiar";
$errores["nombre"]=$nelson;
$errores["apellido"]="$aguiar";
var_dump ($errores);
$auto = $errores;
echo "<hr>";
echo $auto;
var_dump ($auto);
