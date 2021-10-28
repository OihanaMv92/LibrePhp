<html>
<head>
    <meta charset="utf-8">
     <title>Control de flujo</title>
</head>

    <body>
        
        <?php
            // VARIABLES
            $valor1 =2;
            $valor2=6;
            $dia =3;

           if($valor1>$valor2){
               echo "Valor 1 es mayor que valor 2 </br>";
           } else if($valor1==$valor2){
            echo "es Igual </br>";
           } else {
               echo "el valor 1 seria menor que el valor 2 </br>";
           }

           if($dia == 1){
               echo "Lunes";
           } else if($dia == 2){
               echo "Martes";
           }
               else if ($dia == 3){
                   echo "Miercoles";
               }
           


        ?>
    </body>
</html>