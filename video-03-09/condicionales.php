<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $variable1 = 8;
        $variable2 = "8";
        $variable3 = "Juan";

        if($variable1==$variable2){
            echo "Son iguales </br>";
        }else{
            echo "No son iguales </br>";
        }

        if($variable1==$variable3){
            echo "Son iguales </br>";
        }else{
            echo "No son iguales </br>";
        }

        if($variable1===$variable2){
            echo "Son iguales </br>";
        }else{
            echo "No son iguales </br>";
        }

        if($variable2===$variable3){
            echo "Son iguales </br>";
        }else{
            echo "No son iguales </br>";
        }
    
    ?>
</body>
</html>