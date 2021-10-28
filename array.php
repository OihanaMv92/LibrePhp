<!doctype html>
<html>
<head>
    <meta charset="utf-8">
     <title>Array</title>
</head>

    <body>
        
        <?php
            //ARRAY
            $dias = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
            $temperaturas = [23,14,31,10];
            // array vacio
            $vacio = array(15);
            $datos = array();

            echo $dias[1];
            echo "</br>";
            echo $temperaturas[0];
            echo "</br>";

            var_dump($dias);
            echo "</br>";
            var_dump($temperaturas);

        ?>
    </body>
</html>