<?php
if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age'])) {
	echo 'Bonjour '. $_GET['nom']. ' '.$_GET['prenom'].' tu as, '.$_GET['age'];
} else {
	echo "Pas de nom ou de prenom ou d'âge valide";
}

?>