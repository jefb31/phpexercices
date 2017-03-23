<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo7</title>
</head>
<body>
	<h1><?php echo("PHP is awesome") ?></h1>
	<?php

	function ageGenre($age, $genre){
		if($age >= 18){

			$majorit = " majeur(e)";
		}
		else{

			$majorit = " mineur(e)";

		};

		if($genre == "Homme"){

			$civilit = "Vous etes un Homme ";
		}

		elseif($genre == "Femme"){

			$civilit = "Vous etes une Femme ";

		};
		return $civilit.$majorit;
	};
	echo ageGenre(14, "Homme");

	?>	
</body>
</html>