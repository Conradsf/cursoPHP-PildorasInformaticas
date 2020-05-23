<?php

class Coche{
        #si el atrivuto solo se puede acceder desde la classe (private)
        # debemos crear uan funcion que pueda leer este atributo desde fuera.
        # getters-setters:

        protected $ruedas;
        
        var $color;

        protected $motor;

        
        function __construct(){
            $this->ruedas=4;
            $this->color="gris";
            $this->motor=1600;
        }

        #la functión get_ruedas() permite devolver el atributo de la clase ruedas 
        #cuando se llame fuera de la clase.
        #RECORDAR: GET SOLO PERMITE LEER EL ATRIBUTO DESDE FUERA. NO SE PUEDE MODIFICAR.

        function get_ruedas(){
            return $this->ruedas;
        }

        function get_motor(){
            return $this->motor;
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

        #ESTE ES UN SETTER CON UN NOMBRE NO CONVENCIONAL:
        // function establecer_color($color_coche,$nombre_coche){ 
            
        //     $this->color=$color_coche;
        //     echo "El color del coche " . $nombre_coche . " es: " . $this->color . "<br>";
        // }
        
        #Ahora ya seria un setter escrito de forma convencional:

        function set_color($color_coche,$nombre_coche){ 
            
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