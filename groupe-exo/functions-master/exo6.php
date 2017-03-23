<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo6</title>
</head>
<body>
	<h1><?php echo("PHP is awesome") ?></h1>
	<?php
	
	function civile($prenom, $nom, $age){

		return "Bonjour ".$prenom.$nom."tu as ".$age.' ans';
	}
	echo civile(' Kevin ', ' PUYOL ', 21);
	?>	
</body>
</html>