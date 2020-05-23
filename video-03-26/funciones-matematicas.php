<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        #https://www.php.net/manual/es/ref.math.php

        $num1=rand(10,50); 
        #sin parametros seria un numero aleatorio
        #con parametros marcas el valor min y maximo
        echo "El numero es: " . $num1 . "<br>";

        $num1=pow(5,3); 
        #Elevar un numero a un exponente
        echo "El numero es: " . $num1 . "<br>";
        
        $num1=5.25; 
        #Redondea segun si el decimal esta al alza o baja segun sea.
        echo "El numero es: " . round($num1) . "<br>";

        $num1=5.252; 
        #Redondea el num de decimales
        echo "El numero es: " . round($num1, $precision=2) . "<br>";
    

        // CASTING IMPLICITO:

        $num = "5";
        # == string
        echo $num . "<br>";

        $num += 2;
        # == int (hace la suma 5+2)
        echo $num . "<br>";

        $num += 5.75;
        # == float ( 7+5.75)
        echo $num . "<br>";

        $num = "5";
        # == string

        $resultado=$num;
        # == string
        
        // CASTING EXPLICITO:
        $resultado=(int)$num;
        # == int
        echo gettype($resultado) . "<br>";
        
    ?> 
</body>
</html>

