<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo8</title>
</head>
<body>
	<h1><?php echo("PHP is awesome") ?></h1>
	<?php
	function nbr($nb1 = 3, $nb2 = 4, $nb3 = 2){

		return $nb1 + $nb2 + $nb3; 
	}	
	echo nbr(1, 2, 3);

	?>		
</body>
</html>