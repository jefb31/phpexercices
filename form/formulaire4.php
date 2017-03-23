<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire4</title>
</head>
<body>
	<h1>Exercice 4</h1>

	<p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>

		<form action="user.php" method="post">
			<label for="name">Nom</label>
			<input type="text" name="name">
			<label for="firstName">Prenom</label>
			<input type="text" name="firstName">
			<input type="submit" value="envoyer">
		</form>

	<?php
		echo $_POST["name"];
		echo $_POST["firstName"];


	?>
</body>
</html>

