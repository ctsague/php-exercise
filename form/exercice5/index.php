<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<p><label>Civilié : <select name="civilite" id="">
			<option value="Monsieur" >Monsieur</option>
			<option value="Madame">Madame</option>
		</select></label></p>
		<p><label>Nom :<input type="text" name="nom"></label></p>
		<p><label>Prénom :<input type="text" name="prenom"></label></p>
		<p><input type="submit"></p>
	</form>

	<?php
		echo 'Bonjour '.$_POST['civilite'].' '.$_POST['nom']. ' '.$_POST['prenom'];
	?>
	
</body>
</html>