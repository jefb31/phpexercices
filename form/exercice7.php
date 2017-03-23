<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire5</title>
</head>
<body>
	<h1>Exercice 7</h1>

	<p>Exercice 7 Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>

		<?php

	if (!$_POST["civilité"]||!$_POST["name"]||!$_POST["firstName"]){

		echo '<fieldset>	

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
				<label for="fichier">Fichier</label>
				<input type="file" name="file">
				<input type="submit" value="envoyer"> 
				
			</form>
		</fieldset>';
	}
	else{
		echo $_POST["civilité"];
		echo $_POST["name"];
		echo $_POST["firstName"];

		/*echo $_GET["civilité"];
		echo $_GET["name"];
		echo $_GET["firstName"];*/
	}

	?>
</body>
</html>

































