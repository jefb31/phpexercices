<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo5</title>
</head>
<body>
	<h1><?php echo("PHP is awesome") ?></h1>
	<?php
	function stringAdd($string, $nbr){

		return $string.$nbr;
	}
	echo stringAdd("C'est pas faux ", 21);
	?>	
</body>
</html>