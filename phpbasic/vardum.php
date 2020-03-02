<!DOCTYPE html>
<html>
<head>
	<title>
		PHP var_dump()
	</title>
</head>
<body>

	<?php
		/*
		$texto = "Hello world!";
		$texto2 = 'Hello world!';
		$numeroInteiro = 123;

		var_dump($texto);
		echo "<br>";
		echo "<div id='teste'></div>";
		var_dump($numeroInteiro);

		$float1 = 1.234;
		$float2 = 1.234;

		echo $float1 ."; ". $float2;
		*/

		$booleanaTexto = true;
		$booleanaNumero = 1;
		var_dump($booleanaTexto);
		echo "<br>";
		var_dump($booleanaNumero);
		echo "<br>";
		echo ($booleanaTexto == $booleanaNumero);
		echo "<br>";
		var_dump($booleanaTexto == $booleanaNumero);
	?>

</body>
</html>