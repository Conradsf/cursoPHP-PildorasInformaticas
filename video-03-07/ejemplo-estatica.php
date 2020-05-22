<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function incrementaVariable(){

            $contador=0;

            $contador++;

            echo $contador . "<br>";
        }
    
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();

        #siempre saldra 1 xq cuando la funcion termina,
        #el valor de la variable local se destruye.
        # a parte se reinicia con el contador = 0 
        #cada vez que es llamada la f().

        #para evitarlo se crea una variable ESTATICA:
    ?>
    </br>
    <?php
        function incrementaVariable2(){

            static $contador=0;

            $contador++;

            echo $contador . "<br>";
        }
    
        incrementaVariable2();
        incrementaVariable2();
        incrementaVariable2();
        incrementaVariable2();
    ?>
</body>
</html>