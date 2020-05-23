<?php

    class Comprar_vehiculo{

        private $precio_base;
        private static $ayuda=0;

        function __construct($gama){

            if($gama=="urbano"){
                $this->precio_base=10000;

            }else if($gama=="compacto"){
                $this->precio_base=20000;

            }else if($gama=="berlina"){
                $this->precio_base=30000;
            }
        } //Fin constructor
        
        # esta funcion es statica. Permite acceder a ella a través de la clase.
        # segun la fecha que este definidido en el if modificará la variable estatica
        # de la clase en este caso de 0 a 4500.
        # recordemos que al ser private static NO se puede modificar desde fuera.

        static function descuento_gobierno() {
            if(date("m-d-y")>"01-01-20"){
                self::$ayuda=4500;
            }

        } //Fin decscuento gobierno

        function climatizador(){
            $this->precio_base+=2000;
        } //Fin climatizador

        function navegador_gps(){
            $this->precio_base+=2500;
        } //Fin navegador GPS

        function tapiceria_cuero($color){
            if($color=="blanco"){
                $this->precio_base+=3000;
            
            }else if($color=="beige"){
                $this->precio_base+=3500;

            }else{
                $this->precio_base+=5000;
            }
        } //Fin tapiceria

        function precio_final(){
            #cuando se trabaja con atributos static no se puede usar $this->
            #ya que $this-> se usa cuando se instancia los atributos de cada clase.
            #en este caso, para poder trabajar con una variable static. se usa self::
            # self:: hace referencia a la clase y no a la instancia de la clase.

            $valor_final = $this->precio_base-self::$ayuda;
            return $valor_final;
        } // Fin precio final

    } // Fin clase
?>