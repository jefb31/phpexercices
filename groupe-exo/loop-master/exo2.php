<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo2</title>
</head>
<body>
	<h1><?php echo("PHP is awesome") ?></h1>
	<?php
	$i = 0;
	$nb = 42;

	while ($i < 21){
		$i*$nb;
		echo($i*$nb);
		echo(' ');
		$i++;
	}
	?>
</body>
</html>