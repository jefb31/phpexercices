<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>exercice1 globalvariables</h1>
	<p>Faire une page HTML permettant de donner à l'utilisateur :</br>son User Agent </br>son adresse ip </br>
le nom du serveur </p>
<?php

echo $_SERVER['HTTP_USER_AGENT'].'</br>';
echo $_SERVER['REMOTE_ADDR'].'</br>';
echo $_SERVER["SERVER_NAME"];




?>
	
</body>
</html>