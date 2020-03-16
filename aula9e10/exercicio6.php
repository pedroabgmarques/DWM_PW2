<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 6</title>
</head>
<body>


	<?php

		$associativo = array("Japan"=>"Tokyo", "Mexico"=>"Mexico City", "USA"=>"New York City");

		echo "Cidade: ". $associativo["Japan"] . "<br>";
		echo "País: " . array_search("Tokyo", $associativo);

	?>


</body>
</html>