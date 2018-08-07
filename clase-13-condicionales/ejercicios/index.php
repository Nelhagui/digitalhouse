<?php
$nombreyapellido = "Nelson Aguiar";
$dni = 123456789;
$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
$num_dia = 2;
$num_evaluacion = 1;
$evaluaciones = ["Regular", "Bueno", "Excelente"];
$porcentaje = [10, 20, 30];
$sueldo = 8000;


$valoraumento = $porcentaje [$num_evaluacion] * $sueldo / 100;
$nuevosueldo= $sueldo + $valoraumento;


if ($num_dia > -1 && $num_dia < 7 ) {
echo "<h1>Estimado(a) $nombreyapellido, portador del DNI: $dni, le informamos que el día de hoy: $dias[$num_dia], de acuerdo al nivel de evalución obtenido: $evaluaciones[$num_evaluacion], usted ha recibido un aumento del $porcentaje[$num_evaluacion]%, siendo su aumento de: $valoraumento y su nuevo sueldo es de: $nuevosueldo
<hr>
!!!Felicitaciones!!!
</h1>"; } else {
    echo "<h1> Ingresa un valor del 0 al 6 para nombrar el día </h1>";
}

?>