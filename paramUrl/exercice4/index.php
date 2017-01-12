<?php
if(isset($_GET['langage']) && isset($_GET['serveur'])) {
	echo 'Vous utilisez le langage '. $_GET['langage']. ' et le serveur '.$_GET['serveur'];
} else {
	echo "Pas langage ou de serveur défini";
}

?>