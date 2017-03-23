<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire5</title>
</head>
<body>
	<h1>Exercice 8</h1>

	<p>Exercice 8 Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</p>

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
		echo $_POST["file"];
		if (explode(".",$_POST["file"])[1]==="pdf"){

			echo "gg c'est un pdf";
		}



		/*echo $_GET["civilité"];
		echo $_GET["name"];
		echo $_GET["firstName"];*/
	}

	?>
</body>
</html>