<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    
    
    #include("datos-otros.php");
    
    $nombre = "Conrad";
    
    function dameNombre() {
        #(var local)
        # no podemos acceder a la variable global.
        $nombre ="Maria";
    }
    
    dameNombre();

    #imprime Conrad (var global) . 
    #Tampoco podemos acceder a la variable local.
    #echo $nombre;

    #evita que si alguien a creado variables en otro codigo y las importamos
    #no se eliminen nuestras variables:

    #echo $nombre;
    #dameNombre()

    ## Parametros:

    $nombre = "Manolo";
    
    function dameNombre2() {
        global $nombre; 
        #siempre dentro de la funcion para 
        #hacer global la vaiable de fuera
        #se puede prescindir de utilizar variables globales, con los parametros

        $nombre ="El nombre es " . $nombre;
    }
    
    dameNombre2();

    echo $nombre
?>
</body>
</html>