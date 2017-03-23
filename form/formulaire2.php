<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire2</title>
</head>
<body>
	<h1>Exercice 2</h1>
	<p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
	<form action="user.php" method="post">
		<label for="name">Nom</label>
		<input type="text" name="name">
		<label for="firstName">Prenom</label>
		<input type="text" name="firstName">
		<input type="submit" value="envoyer">
	</form>

	<?php

	?>
</body>
</html>