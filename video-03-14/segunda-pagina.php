<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=< initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*    print "Bienvenidos al curso PHP <br>"; // comentario 1
        print "Hola alumnos <br>";
        print "Hasta el próximo curso <br>";
    */
        /* Hola que tal
        esto es un texto largo
        de varias lineas
    */

    $nombre = "Juan";
    $nombre = 'Conrad'; # no es lo mismo poner simples que dobles

    $edad=32;

    print "El nombre del usuario es " . $nombre . " y su edad es de " . $edad;

    echo "<br> $nombre";

    echo "<br>";

    #Print no admite imprimir dos variables
    
    echo $nombre,$edad;

    ?>
</body>
</html>