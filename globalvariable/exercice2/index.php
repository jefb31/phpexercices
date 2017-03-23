<?php
session_start();
$_SESSION['prenom']='Jean';
$_SESSION['nom']='Dupont';
$_SESSION['age']='40';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">	
	<link rel="stylesheet" type="text/css" href="style.php">
	<title>exercice 2</title>
</head>
<body>
	<h1>Exercice 2 et 3 et 4 &  5</h1>
	<p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.
		Il faudra afficher le contenu de ces variables sur la deuxième page.
		Exercice 3 Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.
		Exercice 4 Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.
		Exercice 5 Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
	</p>

	<div>
		<p>
			Bonjour <?php echo $_SESSION['prenom']." ".$_SESSION['nom'].",vous êtes agé de ".$_SESSION['age']; ?>
			Confirmez en cliquant le lien
		</p>

		<a href='page1.php'>RETOUR</a>

		<form action="inscription.php" id="form1" method="POST">
			<label for="">Login</label>
			<input type="text" name="login" value="Jefb31">
			<label for="">Password</label>
			<input type="password" name="mdp" value="123456">
			<input type="submit" value="connection">
		</form>


	</div>

</body>
</html>