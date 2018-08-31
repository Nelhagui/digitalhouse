<?php 

$leer = file_get_contents ('segunda.txt');

echo str_replace(PHP_EOL, '<br>', $leer);