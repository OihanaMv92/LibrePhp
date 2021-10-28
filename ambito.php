<!doctype html>
<html>
<head>
    <meta charset="utf-8">
     <title>ambito</title>
</head>

    <body>
        <?php
        // Ambito.
            $edad = 22;
            $numero = 33;

        function prueba() {
            global $edad;
            echo $edad ;
        }
        prueba();
        // nos dice el nombre del servidor.
        echo " </br> Nombre del servidor: " .$_SERVER['SERVER_NAME'];
        echo "</br> La variable numero vale: " .$GLOBALS['edad']
	
        ?>
    </body>
</html>