<?php

function troisParam(string $nom, string $prenom, int $age) {

	return 'Bonjour '.$nom.' '. $prenom. ' ,tu as '.$age.' ans';
}

echo troisParam(TSAGUE, Christelle, 22);