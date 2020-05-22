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

# Operador SWITCH:

	// Switch(condicion a evaluar){
	// 	Case Valo 1:
	// 	Codigo;
	// 	Break;
	// 	Case Valo 2:
	// 	Codigo;
	// 	Break;
	// 	Default:
	// 	Codigo
	// }

	if(isset($_POST["enviando"])){
		
		$nombre=$_POST["nombre_usuario"];
		$edad=$_POST["edad_usuario"];
		#$contra=$_POST["contra_usuario"];
		
		// switch(true):
		// 	case $nombre=="Juan" && $contra=="1234":
		// 		echo "Usuario autorizado. Hola Juan";
		// 		break;

		// 	case $nombre=="Maria" && $contra=="5678":
		// 		echo "Usuario autorizado. Hola Maria";
		// 		break;

		// 	case $nombre=="Pedro" && $contra=="abcd":
		// 		echo "Usuario autorizado. Hola Pedro";
		// 		break;

		// 	default:
		// 		echo "Usuario no autorizado";

		// endswitch;
		
		switch(true){

		case $edad<=18:
			echo "Eres menor de edad";
		break;

		case $edad<=40:
			echo "Eres joven";
		break;
		
		case$edad<=65:
			echo "Eres maduro";
		break;

		default:
			echo "Cuídate";
		}
	}	

?>