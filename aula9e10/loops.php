<!DOCTYPE html>
<html>
<head>
	<title>Loops</title>
</head>
<body>


	<?php

		//Ciclo While
		$i = 0; 
		while ($i < 10) {
			echo "*";
			$i++;
		}
		
		echo "<br>";

		//Ciclo Do...While
		$j = 0;
		do{
			echo "x";
			$j++;
		}
		while($j < 10);

		echo "<br>";

		//Ciclo for
		for($k = 0; $k < 10; $k++){
			echo "/";
		}

		echo "<br>";

		$nomes = array("João", "Manuel", "Zé", "Pedro", "Maria", "Luísa", "Joana");

		//Ciclo foreach
		foreach($nomes as $nome){
			echo $nome . ";";
			echo "<br>";
		}

		echo "<br>";

		//Mesma coisa, ciclo for
		for($l = 0; $l < count($nomes); $l++){
			echo $nomes[$l] . ";";
			echo "<br>";
		}

		echo "<br><br>";

		$populacaoCidades = array("Lisboa"=>1000000, "Porto"=>800000, "Braga"=>500000, "Aveiro"=>100000, "Coimbra"=>80000);

		foreach($populacaoCidades as $cidade => $populacao){
			echo $cidade . " tem " . $populacao ." habitantes.<br>";
		}

	?>


</body>
</html>