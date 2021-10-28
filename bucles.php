<html>
<head>
    <meta charset="utf-8">
     <title>Ejercicio 2.</title>
</head>

    <body>
        
        <?php
            // VARIABLES
          $num1 = 4;
          $respuesta =  "Oporto";
          $intentos =1;
          $valor = 10;

          //while bucle infinito
          while( $num1 >= 0) {
              echo $num1;
              echo "</br>";
              // para que baje de numero
              $num1--;
          }
          // oporto es distinto k lisboa
          while($respuesta != "Lisboa") {
              echo "Intentos " . $intentos;
              echo "</br>";
              if($intentos == 3) {
                  $respuesta ="Lisboa";
              }
              $intentos++;
          }
          // do while (PRIMERO EJECUTA Y LUEGO COMPRUEBA)
          do{
                echo "Dentro del do while";
          } while($valor != 10);
          


        ?>
    </body>
</html>