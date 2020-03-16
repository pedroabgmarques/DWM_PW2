<!DOCTYPE html>
<html>
<head>
	<title>Condicionais</title>
</head>
<body>
	
	<?php

		//TODO: Criar uma função que receba $x e $y por parametro e devolva a string com o resultado 
		//(maior, menor ou igual)

		function Compare($x, $y){
			if($x > $y){
				return "X é maior!";
			}else if($x < $y){
				return "Y é maior!";
			}else{
				return "X é igual a Y!";
			}
		}

		echo compare(2, 3);
		echo "<br>";
		//Operador ternário
		echo (2 < 3) ? "x é menor" : "y é maior";

	?>
\
</body>
</html>