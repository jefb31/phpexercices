<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo3</title>
</head>
<body>
	<h1><?php echo("PHP is awesome") ?></h1>
	<?php
	$a = 100;
	$b = 20;

	while ($a > 10) {
		$a*$b;
		echo($a*$b);
		echo(' ');
		--$a;
	}
	?>
</body>
</html>