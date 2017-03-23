<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo4</title>
</head>
<body>
	<h1><?php echo("PHP is awesome") ?></h1>
	<?php
	$a = 1;
	$b = $a/2;

	while($a < 10){
		echo($a);
		$a = $a+$b;
		echo(' ');
	}
	?>
</body>
</html>