<?php

   
        $animales = ["Vaca", "Perro", "Gato", "Pájaro", "Ratón", "Ardilla", "Tigre"];
        $animales[100] = "León";
        $animales[16] = "Mono";
    
        var_dump ($animales);

        echo "<hr>";
        echo "Me gustan los animales: " . $animales[0] . ", " . $animales[1] . ", " . $animales[2] . ", " . $animales[3] . ", " . $animales[4] . ", " . $animales[5] . ", " . $animales[6];
        
        echo "<hr>";
        echo "$animales[100]";
        echo "$animales[16]";
        echo "<hr>";
?>