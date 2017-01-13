<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 6</title>
</head>
<body>
	<?php if (empty($_POST)) : ?>
	<form id="formulaire" action="index.php" method="POST" enctype="multipart/form-data">
		<p><label>Civilié : <select name="civilite" id="">
			<option value="Monsieur" >Monsieur</option>
			<option value="Madame">Madame</option>
		</select></label></p>
		<p><label>Nom :<input type="text" name="nom"></label></p>
		<p><label>Prénom :<input type="text" name="prenom"></label></p>
		<label for="">Enregistrer votre fichier</label>
		<p><input type="file" name="mon_fichier" /></p>
		<p><input type="submit"></p>
	</form>

	<?php else : ?> 
		Bonjour <?= $_POST['civilite'].' '.$_POST['nom'].' '.$_POST['prenom']. ' ficher '.$_FILES['mon_fichier']['name']. ' de type '.$_FILES['mon_fichier']['type'].' bien recu.'; 

		$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$extension_reçu = strtolower(  substr(  strrchr($_FILES['mon_fichier']['name'], '.')  ,1)  );
		if ( in_array($extension_reçu,$extensions_valides) ) echo " Extension correcte"; ?>
	<?php endif; ?>
	 
</body>
</html>
