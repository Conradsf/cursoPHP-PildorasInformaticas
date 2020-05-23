<?php
    include("class-coche-herencia.php");

    $mazda = new Coche();

    $pegaso = new Camion();

    echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";

    echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";

    $pegaso->frenar();

    $pegaso->establecer_color("Red","Pegaso");

    $mazda->arrancar();

    $pegaso->arrancar();

    //-----------------------------------------------------------------
    #Si nos fijamos podemos modificar el numero de ruedas de un coche,
    #eso no deberia suceder ya que u ncoche solo tiene 4 ruedas.
    #para evitarlo hay que que ir a la class-coche.php y modificar
    # el atributo ruedas a private.

    $mazda->ruedas=7;
    #ERROR: Cannot access private property Coche::$ruedas.
    #echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";



?>