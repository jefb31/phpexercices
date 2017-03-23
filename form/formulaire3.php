<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire3</title>
</head>
<body>
	<h1>Exercice 3</h1>

	<p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis..</p>

		<form action="user.php" method="get">
			<label for="name">Nom</label>
			<input type="text" name="name">
			<label for="firstName">Prenom</label>
			<input type="text" name="firstName">
			<input type="submit" value="envoyer">
		</form>

	<?php
		echo $_GET["name"];
		echo $_GET["firstName"];


	?>
</body>
</html>