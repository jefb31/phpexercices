<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>modifcookie</title>
</head>
<body>
	<h1>modif</h1>
<?php echo "<form action='inscription.php' method='POST'>
		<label for=''>Login</label>
		<input type='text' name='login' value=".$_COOKIE['login'].">
		<label for=''>Password</label>
		<input type='text' name='mdp' value=".$_COOKIE['motdepasse'].">
		<input type='submit' value='modifier'></form>"; ?>
	
</body>
</html>