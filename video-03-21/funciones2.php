<?php
    /**
     * Por valor:
     * Function ejemplo($param)
     *  $param++
     * }
     * 
     * 
     * Por referencia:
     * function ejemplo2(&$param){
     *  $param++
     * }
     * 
     *  
    */
    
    function incrementa($valor1){
        $valor1++;

        return $valor1;
    }

    $numero = 5;

    #imprime 6 porque guarda el valor incrementado del return de la funcion
    echo incrementa($numero) . "<br>";

    #imprime 5 porque el valor de la variable es 5.
    echo $numero;

    echo "<br>--------------------------<br>";

    function incrementa2(&$valor1){
        $valor1++;

        return $valor1;
    }

    $numero = 5;

    #imprime 6 porque guarda el valor incrementado del return de la funcion
    echo incrementa2($numero) . "<br>";

    #imprime 6 porque guarda el valor incrementado de la funcion tb se guarda en la variable
    echo $numero;

    echo "<br>--------------------------<br>";

    $numero = 5;
    function incrementa3($valor1){
        $valor1++;

        return $valor1;
    }
    $numero = incrementa3($numero);
    
    echo $numero;
    
    echo "<br>--------------------------<br>";

    function cambia_mayus($param){
        $param = strtolower($param);
        $param =ucwords($param);

        return $param;
    }

    $cadena="hOlA mUnDo";

    echo cambia_mayus($cadena) . "<br>";

    echo $cadena;

?>