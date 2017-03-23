<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo4</title>
</head>
<body>
	<h1><?php echo("PHP is awesome") ?></h1>
	<?php
	function nbr($nb1, $nb2){
		if($nb1 < $nb2){
			return "C'est plus petit";
		}
		else if($nb1 > $nb2){
			return "C'est plus grand";
		}
		else{

			return "C'est egal";
		}
	}
	echo nbr(5, 5);
	?>
</body>
</html>