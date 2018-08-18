<?php

// $a = ['a' => 1, 'b' => 2, 'c' => 'Yo <3 JSON'];

// echo $a;

$a = ['a' => 1, 'b' => 2, 'c' => 'Yo <3 JSON'];
echo json_encode($a);
echo "<hr>";

$b = json_encode($a);
echo var_dump(json_decode($b,true));
echo "<hr>";
echo json_encode(array("Oso", "Perro", "Gato"));


