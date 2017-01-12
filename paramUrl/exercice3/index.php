<?php
if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
	echo 'Date comprise entre '. $_GET['dateDebut']. ' et '.$_GET['dateFin'];
} else {
	echo "Pas de date de début ou de fin défini";
}

?>