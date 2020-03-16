<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>

	<?php

		$populacaoCidades = array("Lisboa"=>1000000, "Porto"=>800000, "Braga"=>500000, "Aveiro"=>100000, "Coimbra"=>80000);
		//Ver o que está dentro do array
		print_r($populacaoCidades);
		echo "<br>";
		echo "A população de Braga é mais ou menos ". $populacaoCidades["Braga"] ." pessoas";
		echo "<br><br>";

		//Ordenação de arrays indexados
		$nomes = array("João", "Manuel", "Zé", "Pedro", "Maria", "Luísa", "Joana");
		sort($nomes);
		print_r($nomes);
	
	?>

</body>
</html>