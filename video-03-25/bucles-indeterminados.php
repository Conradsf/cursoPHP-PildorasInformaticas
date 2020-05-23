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
         * --- flujo de trabajo:
         * 
         * While(condición)
         * 
         * Código del bucle
         * 
         * Fin del While
         * 
         * --- siguiente código cuando la condicion no sea verdadera.
         * 
         */


        $var = 1;

        while($var<6){
            echo $var;
            $var++;
        }

        echo "out";

        $var = 3;
        # Ejecuta al menos una vez la condicion del bucle... luego usa el while si el valor lo permite
        do {
            echo $var;
            $var++;
        }while($var<6); 

        echo "out";
    ?>
</body>
</html>