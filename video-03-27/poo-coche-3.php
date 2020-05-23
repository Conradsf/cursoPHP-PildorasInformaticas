<?php
    include("class-coche-herencia.php");

    $mazda = new Coche();

    $pegaso = new Camion();

    # tampoco funcionará si no haces getters and setters:
    # echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";

    echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";

    #No nos dice el numero de ruedas porque camion es una clase que hereda
    #los atributos de la clase Coche. Como coche tiene $ruedas en private
    #no puede acceder a ese atributo.

    #Entonces en vez de ser private $ruedas se debe cambiar a protected $ruedas

    echo "El Pegaso tiene " . $pegaso->get_ruedas() . " ruedas <br>";

    #aunque cambies a protected $ruedas sigue sin poder estar accesible el atributo
    #ruedas fuera de la clase.

    # protected permite heredar atributos de una clase padre.
    # private solo se puede usar dento de la propia clase padre y las clases no lo pueden heredar.

    // -----

    #Hacemos lo mismo con el atributo motor:

    echo "El Mazda tiene un motor de " . $mazda->get_motor(). " cc <br>"



?>