<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<p>
	
		Bonjour <?php echo $_SESSION['prenom']." ".$_SESSION['nom'].",vous êtes agé de ".$_SESSION['age']; ?>
		
		

		

</p>
	
</body>
</html>







