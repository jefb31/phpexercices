


<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');
   // etc. 
?>
/* ici vos styles statiques */

body{

	background: blue;
}

p{

	color:red;
}
 h1{

 	color: maroon;
 }

