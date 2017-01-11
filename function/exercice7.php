<?php
 
function ageGenre(int $age, string $genre) {
	if ($age > 18 && $genre=="homme") {
		return "Vous êtes un homme et vous êtes majeur";
	}
	elseif ($age > 18 && $genre=="femme") {
		return "Vous êtes une femme et vous êtes majeur";
	}
	elseif ($age < 18 && $genre=="homme") {
		return "Vous êtes un homme et vous êtes mineur";
	}
	elseif ($age < 18 && $genre=="femme") {
		return "Vous êtes une femme et vous êtes mineur";
	}	
}

echo ageGenre(19,femme);
// echo ageGenre(17,femme);
// echo ageGenre(19,homme);
// echo ageGenre(16,homme);