<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Exercice 7</h1>
	<p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
		<?php
			$Hauts_de_France = array('59' => 'Nord', '62' => 'Pas de Calais', '80' => 'Somme', '60' => 'Oise', '02'=>'Aisne');

			$Hauts_de_France[51] = 'Marne';
			/*print_r($Hauts_de_France);*/

			

			echo $Hauts_de_France[51];


			/*echo $Hauts_de_France[51]='Marne';*/


		?>
	
</body>
</html>