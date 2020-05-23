<?php

    class Comprar_vehiculo{

        private $precio_base;


        private static $ayuda=4500;

        function __construct($gama){

            if($gama=="urbano"){
                $this->precio_base=10000;

            }else if($gama=="compacto"){
                $this->precio_base=20000;

            }else if($gama=="berlina"){
                $this->precio_base=30000;
            }
        } //Fin constructor

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