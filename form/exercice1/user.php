<?php
if (isset($_GET['nom']) && isset($_GET['prenom'])) {
	echo 'votre nom est '.$_GET['nom']. ' et votre prénom '.$_GET['prenom'];
}
else {
	echo "verifiez votre saisie";
}

?>