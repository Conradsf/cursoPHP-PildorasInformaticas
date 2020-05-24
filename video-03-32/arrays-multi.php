<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $alimentos=array(
            "Fruta"=>array(     "tropical"=>"Kiwi",
                                "Cítrico"=>"Limon"
            ),

            "Carne"=>array(     "cerdo"=>"lomo",
                                "ternera"=>"bistec"
            ),

            "Postres"=>array(   "lactios"=>"yogurt",
                                "gelatina"=>"verde"
            )
        );
        
        #echo $alimentos["fruta"]["tropical"];
        
        #k_alimentos ==  fruta, carne, postres
        #alimento == tropical, citrico, cerdo, ternera...
        foreach($alimentos as $clave_alimentos => $alim){
            echo "$clave_alimentos:<br>";
            foreach($alim as $clave_alimentos => $alim){
                echo "$alim<br>";
            }
        }
     
       var_dump($alimentos);
    
    ?>
</body>
</html>