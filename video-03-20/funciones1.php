<?php
    # https://www.php.net/manual/es/indexes.functions.php
    
    # strtolower -> string a minusculas.
    # strtoupper -> string a mayusculas.
    # ucwords -> la primera letra de cada palabra en mayus.

    // $palabra = "JUAN <br>";
    // echo(strtolower($palabra));

    // $palabra = "juan <br>";   
    // echo(strtoupper($palabra));

    // function suma($num1, $num2){
    //     $resultado=$num1+$num2;
    //     return $resultado;
    // }
    // echo(suma(5,7));

    #parámetros o argumentos por defecto:
    function frase_mayus($frase,$conversion=true){
        $frase=strtolower($frase);
        if($conversion==true){
            $resultado=ucwords($frase);
        }else{
            $resultado=strtoupper($frase);
        }
        return $resultado;
    }

    echo(frase_mayus("esto es una prueba", false))

?>