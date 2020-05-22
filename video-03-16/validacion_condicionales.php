<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
	# se usa else if para ir buscando que la condicion se cumpla
	# si solo es if busca el siguiente if (o else) y lo  vuelve a ejecutar.
	# si ponemos una edad de -18 saltaran los 3 mensajes si usamos solamente if.

	// if(isset($_POST["enviando"])){
	// 	$edad=$_POST["edad_usuario"];

	// 	if($edad<=18){
	// 		echo "Eres menor de edad";

	// 	}else if($edad<=40){
	// 		echo "Eres joven";
		
	// 	}else if($edad<=65){
	// 		echo "Eres maduro";

	// 	}else{
	// 		echo "cuídate";
	// 	}
	// }	

	# Operador ternario:
	# Condicion ? Valor (si es verdadero) : Valor (si es falso)

	

	if(isset($_POST["enviando"])){
		$nombre=$_POST["nombre_usuario"];
		#$edad=$_POST["edad_usuario"];
		$contra=$_POST["contra"];
		

	#ANUNCIADO:

		// if($edad<18){
		// 	echo "Eres menor de edad. No tienes acceso";
		// }else{
		// 	echo "Eres mayor de edad. Puedes Acceder.";
		// }

	#SOLUCION:		
		// $resultado =  $edad<18 ? "Eres menor de edad. No tienes acceso" : "Eres mayor de edad. Puedes acceder.";
		// echo $resultado;	

	# ANUNCIADO: Validar usuario y contraseña:

	$resultado =  $nombre=="Juan"  && $contra=="12345" ? "Puedes acceder" : "No puedes acceder.";
	echo $resultado;

	}	


?>