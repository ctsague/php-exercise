<?php
if(isset($_GET['semaine'])) {
	echo 'Nous sommes semaine'.' '. $_GET['semaine'];
} else {
	echo "Pas de semaine défini !";
}

?>