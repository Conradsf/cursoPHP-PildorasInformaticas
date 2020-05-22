<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .resaltar{
        color: #F00;
        font-weight:bold;
    }
</style>

</head>
<body>
    <?php
    /**
     * Si usamos comillas dobles puede generar problemas a la hora de 
     * imprimir. En el primer caso sale error. Entonces se pueden
     * alternar las comillas simples con las dobles para evitarlo
     * ver ejemplo2. Tambien se puede usar la barra invertida "\"
     * ejemplo3
     */
        #echo "<p class="resaltar">Esto es un ejemplo de frase</p>";
        #echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
        #echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
    
        $nombre = "Conrad";

        #echo "Hola $nombre"; # en este caso no lee ""Conrad""

    /**
     * strcmp compara valores de tipo string si estan mayus y mins 
     * =True
     * strcasecmp no lo hace.
     * =False
     */
        $variable="casa";
        $variable2="CASA";

        $resultado=strcmp($variable,$variable2);
        # strcmp compara si NO son dos strings iguales:
        //1 si NO son iguales(OK). 0 si son iguales(F)
        
        #En este caso es = 1 ya que NO son iguales por las Mayus y Minus:
        echo "El resultado es " . $resultado . " ya que NO son iguales. Tiene en cuentas sus camelCase<br>";

        #$resultado=strcasecmp($variable,$variable2); 
        # strcasecmp compara si NO son dos strings iguales:
        //1 si NO son iguales. 0 si son iguales

        #En este caso es = 0 ya que son iguales ignorando las Mayus y Minus:
        echo "El resultado es " . $resultado . " ya que son iguales. Ignora sus camelCase<br>" ;
        
        # probar combinando y comparando las dos variables:

        #si el resultado es 0:
        if($resultado) {
            echo "No coinciden";

        #si el resultado es 1

        }else {
            echo "Coinciden <br>";
        }

        # otra forma de escribirlo: si resultado no es 0 :
        # si el resultado NO es 0
        if(!$resultado) {
            echo "Coinciden";
        # si el resultado NO es 1
        }else {
            echo "No coinciden";
        }
    ?>
</body>
</html>