<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
</head>
<body>


	<?php

		$month = date('F', time());

		if($month == "August"){
			echo "É Agosto!";
		}else{
			echo "Ainda não é Agosto =(";
		}
		

	?>


</body>
</html>