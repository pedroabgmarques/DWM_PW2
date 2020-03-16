<!DOCTYPE html>
<html>
<head>
	<title>Arrays Multidimensionais</title>
</head>
<body>

	<table border="1">
	<?php

		$arrayMulti = array(
			array("City", "Country", "Continent"),
			array("Tokyo", "Japan", "Asia"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America"),
			array("Mexico City", "Mexico", "North America")
		);


		for ($i = 0; $i < count($arrayMulti); $i++) {
        	echo "<tr>";
        	for ($j = 0; $j < count($arrayMulti[$i]); $j++) {
            	echo "<td>" . $arrayMulti[$i][$j] . "</td>";
        	}
        	echo "</tr>";
    	}


	?>
	</table>

</body>
</html>