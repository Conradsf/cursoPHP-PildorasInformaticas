<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("AUTOR", "Conrad");
        # para usar una constante se escribe en MAY
        echo AUTOR;

        # RECORDAR QUE NO SE PUEDE EDITAR AUTOR ="Juan"; NO FUNCIONA
        # ni con DEFINE: define("AUTOR", "Juan"); NO FUNCIONA
        
        // !!! OBSOLETO \\
        # define("AUTOR", "Juan", TRUE); 
        # para tener una constante en mayusculas y otra con el mismo
        # nombre pero que se puede llamar con minusculas:
        # echo autor;
        
        echo "<br>"; 
        # par acombinar un string tienes que sacar el valor de la str
        echo "El autor es: " . AUTOR;
    ?>
    <?php
    # Constantes PREDEFINIDAS:
    # Magic constants:
    # __BLABLA__
    # ver: https://www.php.net/manual/es/language.constants.predefined.php

    echo "ver linea de codigo " . __LINE__ . "<br>";

    echo " Estamos trabajando con este fichero " . __FILE__; 
    
    # constantes predefinidas:
    # https://www.php.net/manual/es/reserved.constants.php
    
    ?>
</body>
</html>