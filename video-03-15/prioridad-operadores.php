<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    # https://www.php.net/manual/es/language.operators.precedence.php

    $var1 = True;
    $var2 = False;
    $resultado=$var1 && $var2;
    #tiene prioridad el && y luego =
    
    if($resultado == true){     
        echo "OK";
    }else{
        echo "FAIL";
    }

    echo "<br>";
    #da FAIL

    $resultado=$var1 and $var2;
    #tiene prioridad el = y luego and

    if($resultado == true){     
        echo "OK";
    }else{
        echo "FAIL";
    }
    #da OK



    ?>
</body>
</html>