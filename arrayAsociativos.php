<html>
<head>
    <meta charset="utf-8">
     <title>Array Asociativo</title>
</head>

    <body>
        
        <?php
            //ARRAY ASOCIATIVOS 
            $exploradores = array("explorador1" => "Chrome", "explorador2" => "Opera", "explorador3" => "Firefox");
            $datos=array("nombre" => "Marisa", "edad" => 21, "Profesor" => true, 3 => 100);
             //MOSTRAR DATOS DE LOS ARRAY
            echo " El explorador 3: " . $exploradores["explorador3"];
            echo "</br>";
            echo "Nombre " . $datos["nombre"];
            echo "</br>";
            echo "3: " .$datos[3];
            echo "</br>";

            var_dump($exploradores);
            echo "</br>";
            var_dump($datos);




        ?>
    </body>
</html>