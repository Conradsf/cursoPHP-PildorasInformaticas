<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        #Arrays Indexados:
        /**#forma 1:
         * $semana [] = "lunes";
         * $semana [] = "martes";
         * $semana [] = "miercoles";
         * 
         */

            /**#forma 2:
         * $semana [0] = "lunes";
         * $semana [1] = "martes";
         * $semana [2] = "miercoles";
         * 
         */
        
        #forma 3:
        #$semana = ["lunes","martes","miercoles","jueves"];
        #echo $semana[1];

        #Array Asociativos:
        $datos=array("Nombre"=>"Conrad","Apellido"=>"Soler","Apellido2"=>"Ferrer");
        #echo $datos["Nombre"];  
    ?>

    <!-- SEGUNDO VIDEO -->

    <?php   

    $datos=array("Nombre"=>"Conrad","Apellido"=>"Soler","Apellido2"=>"Ferrer");

        #Comprobar si $datos es un array o no:

        // if(is_array($datos)){
        //     echo "Es un array";
        // }else{
        //     echo "No es un array";
        // }

        #Recorrer una array asociativo:

        // foreach($datos as $dato=>$valor){
        //     echo "A $dato le corresponde $valor <br>";
        // }

        // #Agregar un valor más en un array asociativo:

        // $datos["País"]="España";
        
        // foreach($datos as $dato=>$valor){
        //     echo "A $dato le corresponde $valor <br>";
        // }

        #Ordenar array:


        // -------------------------------------------


        #Recorrer un array indexado:

    $semana = ["lunes","martes","miercoles","jueves","viernes"];

    // for($i=0;$i<count($semana);$i++){
    //      echo "$semana[$i] <br>";
    // }

         #Agregar un valor más en un array idexado:

    sort($semana);

    for($i=0;$i<count($semana);$i++){
        echo $semana[$i] . "<br>";
    
    }


        #Ordenar valores de un array:

    ?>
   
</body>
</html>