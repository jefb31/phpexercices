<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire6</title>
</head>
<body>
	<h1>Exercice 6</h1>

	<p>Exercice 6 Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.<!DOCTYPE html></p>
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









