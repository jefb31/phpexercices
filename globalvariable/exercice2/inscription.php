<?php
setcookie('login', $_POST['login'], time()+3600);
setcookie('motdepasse', $_POST['mdp'], time()+3600);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>fiche de connection</title>
</head>
<body>
	<h1>hello</h1>
	<?php
	echo $_COOKIE['login']. " " . $_COOKIE['motdepasse'];
	?>
	<a href="modifcookie.php">modification</a>
</body>
</html>