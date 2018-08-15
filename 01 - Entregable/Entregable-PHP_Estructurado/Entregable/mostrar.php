
<?php /* PARTE A */
    // if($_POST){
    //     var_dump($_POST);
    // }

$sueldoBruto = 0;
$descuentoJubilacion = 0;
$descuentoObraSocial = 0;
$sueldoNeto = 0;
$sueldoBruto = $_POST[sueldo_bruto];
$nombre = $_POST[nombre];
$apellido = $_POST[apellido];    


if ($_POST) { /* PARTE D */  

    // DESCUENTO JUBILACIÓN /* PARTE B */
        function descuentoJubilacion () {
            global $sueldoBruto;
            $descuentoJubilacion = $sueldoBruto * 0.11;
            return $descuentoJubilacion;
        }

    // DESCUENTO OBRA SOCIAL /* PARTE C */
        function descuentoObraSocial () {
            global $sueldoBruto;
            $descuentoObraSocial = $sueldoBruto * 0.3;
            return $descuentoObraSocial;
        }

        $sueldoNeto = $sueldoBruto - descuentoJubilacion() - descuentoObraSocial();


    // RETENCIÓN GANANCIAS  /* PARTE E */

        if ($sueldoNeto > 35000) {
            function retencionGanancias () {
                global $sueldoNeto;
                $retencionGanancias = $sueldoNeto - ($sueldoNeto * 0.2);
                return $retencionGanancias;
            }
        }


    
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio integrador 1 - Perfil creado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">

    <style>
        .spacer {
            padding-top: 15px;
            padding-bottom: 15px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="mx-auto" style="margin-bottom: 8px; margin-top: 20px;"><img src="img/imagen-perfil.png" alt="imagen prestada temporalmente"></div>
        </div>
        <div class="row">
            <div class="mx-auto"><?php echo $nombre . " " . $apellido;?></div>
        </div>
        <div class="row">
            <div class="col"> <h3>Sueldo Bruto</h3></div>
            <div class="col"><h3>$<?php echo $sueldoBruto ?></h3></div>
        </div>
        <div class="row">
            <div class="col"><h3>Sueldo Neto</h3></div>
            <div class="col"><h3>$<?php echo $sueldoNeto ?></h3></div>
        </div>
        <div>
            <h4>Descuentos:</h4>
        </div>
        <div class="row">
            <div class="col"><h3>Descuento Jubilación</h3></div>
            <div class="col"><h3>$<?php echo descuentoJubilacion() ?></h3></div>
        </div>
        <div class="row">
            <div class="col"><h3>Descuento Obra Social</h3></div>
            <div class="col"><h3>$<?php echo descuentoObraSocial() ?></h3></div>
        </div>

        <?php if ($sueldoNeto > 35000) { ?>
            <div class="row">
                <div class="col"><h3>Retención Ganancias</h3></div>
                <div class="col"><h3>$<?php echo retencionGanancias() ?></h3></div>
            </div>


        <?php } ?>

    </div>

    

</body>
</html>