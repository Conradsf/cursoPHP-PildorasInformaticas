<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * for(iniciación bucle; condicion del bucle; incremento/decremento bucle);{
     *  codigo
     * }
     * 
     */
    
        for($i=0;$i<=10;$i++) {
            echo "<p> Hemos entrado en el bucle </p>";
        }

        for($i=10;$i>=0;$i--) {
            echo "<p>2 Hemos entrado en el bucle </p>";
        }

        for($i=0;$i<=20;$i+=2) {
            echo "<p> 3 Hemos entrado en el bucle </p>";
        }

        #Salir del bucle sin terminar la iteracion entera del bucle:
        for($i=0;$i<=10;$i++) {
            echo "<p> 4 Hemos entrado en el bucle </p>";
            if($i==6){
                echo "<p> 5 Hemos entrado en el bucle </p>";

                break;
                }
        }

        #Saltar en puntos concretos de una iteración:
        #en negativo:
        for($i=0;$i<=10;$i++) {
            if($i!=6){
                echo "9 x $i = " . 9*$i . "</br>";
            
                continue;
            }
        }

        for($i=0;$i<=10;$i++) {
        #en positivo
            if($i==6){
                continue;
            }
            echo "9 x $i = " . 9*$i . "</br>";
        }
    ?>
</body>
</html>