<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo "Este es el primer mensaje <br>";

        function dameDatos() {
            echo "Este es el mensaje del interior de la función <br>";
        }
        
        #posicion 1 (se imprime en medio de los otros mensajes) 
        #dameDatos();
        
        echo "Este es el segundo mensaje <br>";

        #posicion 2 (se imprime al final)
        dameDatos2();

        #se puede llamar varias veces una funcion:
        dameDatos();
        dameDatos();
    ?>
    <?php
        #se peuden crear la funcion fuera del codigo y luego llamarlo para limpiar mas

        function dameDatos2(){
            echo "Este es el mensaje del interior de la función 2 <br>";
        }
    
    
    ?>
    <?php
        #incluso se pueden importar de otro documento como "proporcionar_datos.php"
        
        #include ("proporcionar_datos.php");
        #dameDatos3();
        
        require ("proporcionar_datos.php");
        dameDatos3();
        
    /*
    El require es menos permisivo.
    Si no encuentra el archivo detiene el programa y salta error.
    Include sigue corriendo el programa pero tb salta el error.
    */
    
    ?>
</body>
</html>