<html>
<head>
    <meta charset="utf-8">
     <title>Bucles</title>
</head>

    <body>
        
        <?php
            //VARIABLES
            $num =5;
            echo "----Numeros del 1 al 10----";
            echo "</br>";
            for($i=1;$i<=10;$i++){
                echo $i;
                echo "</br>";;
            }

            echo "----Numeros del 10 al 1----";
            echo "</br>";
            for($j=10;$j>=1;$j--){
                echo $j;
                echo "</br>";
            }
           /* echo "----Numeros PARES AL 100----";
            echo "</br>";
            for($k=0;$k<=100;$k=$k+2){
                echo $k;
                echo "</br>";
            } */

            echo "----Numeros PARES AL 100----";
            echo "</br>";
            for($h=0;$h<=100;$h++){
                if($h%2 == 0){
                    echo $h;
                    echo "</br>";
                }
            }
            echo "----TABLA MULTIPLICAR----";
            echo "</br>";
            for($l=1;$l<=10;$l++){
                echo $num . "x" . $l . "=" . $l*$num;
                 echo "</br>";
                
            }

        ?>
    </body>
</html>