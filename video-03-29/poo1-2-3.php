<?php
    /**
     * Que es POO
     * Clases
     * Instanciar clases
    */

    class Coche{
        
        var $ruedas;
        
        var $color;

        var $motor;

        # CONSTRUCTOR indica el estado inicial de los ATRIBUTOS de los objetos:
        # ANTES: tenia que tener el mismo nombre que la class: Coche(){}
        # AHORA: se indican todos asi: __construct(){}
        
        function __construct(){
            #this-> se refiere a su propia clase, es lo mismo que decir Coche()
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;
        }

        function arrancar(){
            echo "Estoy arrancando <br>";
        }

        function girar(){
            echo "Estoy girando <br>";
        }

        function frenar(){
            echo "Estoy frenando <br>";
        }

        //esta funcion debe recibir el nombre de un color. Es decir, un parametro
        function establecer_color($color_coche,$nombre_coche){ 
            //asignamos el valor de color_coche a la propiedad (atributo) de clase coche.
            $this->color=$color_coche;
            echo "El color del coche " . $nombre_coche . " es: " . $this->color . "<br>";
        }
    }

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

?>