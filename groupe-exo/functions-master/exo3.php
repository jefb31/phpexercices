<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo 3</title>
</head>
<body>
	<h1><?php echo("PHP is awesome") ?></h1>
	<?php
	function stringAdd($string1, $string2){

		return $string1.$string2;
	}
	echo stringAdd("C'est pas faux ", " En tant que tel");
	?>
</body>
</html>