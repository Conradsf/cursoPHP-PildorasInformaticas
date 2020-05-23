<?php
    include("class-coche.php");

    #Instanciacion de Objetos:
    $renault = new Coche();
    $mazda = new Coche();
    $seat = new Coche();

    #Decirle al objeto mazda que ejecute el metodo girar();
    $mazda->girar();

    #Decirle al objeto mazda que ejecute el atributo ruedas;
    echo ($mazda->ruedas) . "<br>";

    $renault->establecer_color("rojo","Renault");
    $seat->establecer_color("azul","Seat");

    // -------------------------------------

    $mercedes = new Coche();
    $iveco = new Camion();
    #tiene 4 ruedas
    echo "El Mazda tiene " . $mercedes->ruedas . " ruedas <br>";

    #tiene 8 ruedas 
    echo "El Mazda tiene " . $iveco->ruedas . " ruedas <br>";

    #da error en el navegador, ya que le hemnos quitado el método a la clase Camion. 
    #Call to undefined method Camion:
    #$iveco->establecer_color("amarillo", "Iveco");
?>