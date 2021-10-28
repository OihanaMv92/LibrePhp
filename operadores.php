<html>
<head>
    <meta charset="utf-8">
     <title>Operadores</title>
</head>

    <body>
        
        <?php
            //OPERADORES
            $num1 = 5;
            $num2 =10;
            $num3 = 5;
            $valor1="5";

            $total = $num1+$num2;
            echo "El resultado de la suma es: " . $total;
            echo "</br>";
            echo $num1 . " x " . $num2 . " = " . $num1 * $num2;
            echo "</br>";
            echo $num2 . " / " . $num1 . " = " . $num2 % $num1;
            echo "</br>";
            echo $num1 . " elevado a " . $num2 . " = " . $num1 ** $num2;
            echo "</br>";
              //  $num3 = $num1;
              //  echo $num3;
                echo "</br>";
                echo $num1 . " += " . $num2 . " = > " .$num1+=$num2;
                echo "</br>";
                echo $num1 . " *= " . $num2 . " = > " .$num1*=$num2;


        if($num1 == $num2){
            echo "son iguales";
            echo "</br>";
        } else {
            echo "</br>";
            echo " No son iguales";
        }

        ?>
    </body>
</html>