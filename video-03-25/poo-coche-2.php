<?php
    include("class-coche-herencia.php");

    $mazda = new Coche();

    $pegaso = new Camion();

    echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";

    echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";

    $pegaso->frenar();

    $pegaso->establecer_color("Red","Pegaso");

    #solo usa las funcionalidades de la clase coche:
    $mazda->arrancar();
    #parent + nuevas funcionalidades:
    $pegaso->arrancar();
?>