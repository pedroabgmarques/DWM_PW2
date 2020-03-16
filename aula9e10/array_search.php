<!DOCTYPE html>
<html>
<head>
	<title>Array Search</title>
</head>
<body>


	<?php

		$populacaoCidades = array("Lisboa"=>1000000, "Porto"=>800000, "Braga"=>500000, "Aveiro"=>100000, "Coimbra"=>80000);

		echo $populacaoCidades["Lisboa"];
		echo "<br>";
		echo array_search(1000000, $populacaoCidades);

	?>


</body>
</html>