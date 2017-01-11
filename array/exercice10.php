<?php

$arrayDepHautFrance = array(
	02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas de Calais',
    80 => 'Somme',
);

foreach ($arrayDepHautFrance as $key => $value) {
	echo "Le département : $value; a le numéro : $key<br/>";
}
?>