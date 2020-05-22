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
	if(isset($_POST["enviando"])){
		$edad=$_POST["edad_usuario"];
		if($edad<=18){
			echo "Eres menor de edad";
		}else if($edad<=40){
			echo "Eres joven";
		}else if($edad<=65){
			echo "Eres maduro";
		}else{
			echo "cuídate";
		}
	}
	
?>