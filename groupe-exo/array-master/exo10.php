<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo10</title>
</head>
<body>
	<?php   
	$hautDeFrance = array('59' => 'Nord', '62'=> 'Pas de calais', '80'=> 'Somme', '60'=>'Oise', '02'=>'Aisne'); 

	foreach ($hautDeFrance as $departement => $key) {
		echo " Le departement"." ".$key." "."a le numero"." ".$departement;
	}	
	?>
</body>
</html>