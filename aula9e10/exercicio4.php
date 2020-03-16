<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
</head>
<body>


	<table border="1">
	<?php

		for($i = 0; $i < 7; $i++){
			?>
			<tr>
				<?php
				for($j = 0; $j < 7; $j++){
					?>
						<td><?php echo (($i+1) * ($j+1)) ?></td>
					<?php
				}
				?>
			</tr>
			<?php
		}
	?>
	</table>

</body>
</html>