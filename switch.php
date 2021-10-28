<html>
<head>
    <meta charset="utf-8">
     <title>Control de flujo Switch</title>
</head>

    <body>
        
        <?php
            // VARIABLES
           $dia = 3;

           switch ($dia){
               case 1:
                echo "lunes </br>";
            break;
                case 2:
                    echo "Martes </br>";
            break;
                    case 3:
                        echo "Miercoles </br>";
                    break;
                    default:
                    echo "dia no valido </br>";
           }
           $diaa = "Miercoles";

           switch ($diaa){
               case "Lunes":
                echo 1;
            break;
                case "Martes":
                    echo 2;
            break;
                    case "Miercoles":
                        echo 3;
                    break;
                    default:
                    echo "dia no valido";
           }




        ?>
    </body>
</html>