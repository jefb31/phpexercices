<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo9</title>
</head>
<body>
	<?php   
	$hautDeFrance = array('59' => 'Nord', '62'=> 'Pas de calais', '80'=> 'Somme', '60'=>'Oise', '02'=>'Aisne'); 
	echo $hautDeFrance[51]='Marne ';

	foreach ($hautDeFrance as $departement) {
		echo $departement." ";
	}	
	?>
</body>
</html>