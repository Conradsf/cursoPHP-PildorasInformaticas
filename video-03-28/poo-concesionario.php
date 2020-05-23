<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("concesionario.php");

        // Cliente 1
        $compra_Antonio = new Comprar_vehiculo("compacto");

        $compra_Antonio->climatizador();

        $compra_Antonio->tapiceria_cuero("blanco");
    
        echo $compra_Antonio->precio_final() . "<br>";

        // Cliente 2
        $compra_Ana = new Comprar_vehiculo("compacto");

        $compra_Ana->climatizador();

        $compra_Ana->tapiceria_cuero("rojo");

        echo $compra_Ana->precio_final() . "<br>";
    
    # hasta aqui la aplicación funciona con normalidad.
    # pero si lo que queremos es que un metodo no se instancie se tiene que crear en formato static.

    # crear una variable static permite trabajar exclusivamente dentro de la clase PADRE,
    # en vez de que la clase padre comparta esa variable static en todas sus herencias.

    # Cuidado! Si no ponemos private static "nombre variable" 
    # se puede modificar el valor fuera de la clase:
    
    # Comprar_vehiculo::$ayuda=10000;
    # Como veis, sin el modificador private, se puede acceder a la clase y modificar el atirbuto.
    # Con el private static salta un error: Cannot access private property 

    ?>
</body>
</html>