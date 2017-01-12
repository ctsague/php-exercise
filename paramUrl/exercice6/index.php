<?php
if(isset($_GET['batiment']) && isset($_GET['salle'])) {
	echo 'Vous êtes batiment '. $_GET['batiment']. ' salle '.$_GET['salle'];
} else {
	echo "Pas batiment ou de salle défini";
}

?>