<!DOCTYPE html>
<html>
<head>
	<title>
		PHP var_dump()
	</title>
</head>
<body>

	<?php
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
	?>

</body>
</html>