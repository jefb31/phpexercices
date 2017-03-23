<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire5</title>
</head>
<body>
	<h1>Exercice 5</h1>

	<p>Exercice 5 Créer un formulaire sur la page index.php avec :
		Une liste déroulante pour la civilité (Mr ou Mme) 
		Un champ texte pour le nom 
		Un champ texte pour le prénom 
		Ce formulaire doit rediriger vers la page index.php.
		Vous avez le choix de la méthode avec POST ou GET.</p>

		<fieldset>	

			<form action="index.php" method="post">
			<!--<form action="user.php" method="GET">-->
				<select name="civilité">
					<option value="Monsieur">Monsieur></option>
					<option value="Madame">Madame></option>
				</select>
				<label for="name">Nom</label>
				<input type="text" name="name">
				<label for="firstName">Prenom</label>
				<input type="text" name="firstName">
				<input type="submit" value="envoyer">
			</form>
		</fieldset>
	<?php
		echo $_POST["civilité"];
		echo $_POST["name"];
		echo $_POST["firstName"];

		/*echo $_GET["civilité"];
		echo $_GET["name"];
		echo $_GET["firstName"];*/


	?>
</body>
</html>
































