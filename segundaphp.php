<!doctype html>
<html>
<head>
    <meta charset="utf-8">
     <title>Primera paguina</title>
</head>

    <body>
        <?php
        // Variables.
            $edad = 33;
            $sueldo;
            $estatura =1.24;
            $nombre = "Marisa";
            $apellidos = "Lopez";
            $profesor = true;
        //CONCATENAR VARIAS MANERAS
            echo "tengo $edad años </br>" ;
            echo "me llamo " . $nombre . "</br>" ;
            echo "me llamo $nombre tengo $edad años mi estatura es: $estatura, mi apellido es $apellidos y soy profesora $profesor </br>";
            echo "me llamo " . $nombre . "tengo " . $edad . " años mi estatura es: " . $estatura . ", mi apellido es: " . $apellidos . " soy profesora " . $profesor . "</br>";
        // Para ver si es verdadero o falso.
            echo json_encode($profesor);


	
        ?>
    </body>
</html>