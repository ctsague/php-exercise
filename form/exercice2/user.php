<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p> Bonjour
		<?php 
			echo $_POST['nom']. ' '.$_POST['prenom'];
		?>
	</p>
</body>
</html>