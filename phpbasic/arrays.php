<!DOCTYPE html>
<html>
<head>
	<title>Arrays PHP</title>
</head>
<body>

	<?php
		$cores = array("azul", "verde", "vermelho");
		/*var_dump($cores);
		echo "<br>";*/
		echo $cores[0];

		$coresAssociativas = array(
			"ceu" => "azul",
			"relva" => "verde",
			"sangue" => "vermelho"
		);

		/*echo "<br>";
		var_dump($coresAssociativas);*/
		echo "<br>";
		echo $coresAssociativas["ceu"];
	?>

</body>
</html>