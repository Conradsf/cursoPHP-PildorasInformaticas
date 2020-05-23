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
            $this->color="gris";
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

    //----------------------------------------------------------------------------------
   
    #Camion --> Subclase (hijo). 
    #Coche --> Superclase (padre).

    class Camion extends Coche{
    #hereda todos los atributos y metodos de la superclase. Incluso color, que no lo queremos usar.
    #Par evitar usar metodos heredados que NO queremos, hay que reconstruir los metodos el constructor:

        function __construct(){
            #this-> se refiere a su propia clase, es lo mismo que decir Coche()
            $this->ruedas=8;
            $this->color="gris";
            $this->motor=2600;
        }

        function establecer_color($color_camion,$nombre_camion){ 
            //asignamos el valor de color_coche a la propiedad (atributo) de clase coche.
            $this->color=$color_camion;
            echo "El color del coche " . $nombre_camion . " es: " . $this->color . "<br>";
        }
    
    # para añadir algo nuevo en una funcion heredada, se puede usar parent:: para no reescribir todo:

        function arrancar() {
            #añadimos todo el codigo interno de la funcion arrancar de Coche
            parent::arrancar();
            #añadimos codigo nuevo que solo podrá leer camion:
            echo "Camión arrancado";
        }
    }
?>