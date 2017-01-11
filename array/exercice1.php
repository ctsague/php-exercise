<?php
$arrayMonth = array(
	 0 => 'Janvier',
     1 => 'Février',
     2 => 'Mars',
     3 => 'Avril',
     4 => 'Mai',
     5 => 'Juin',
     6 => 'Juillet',
     7 => 'Août',
     8=> 'Septembre',
     9=> 'Octobre',
    10 => 'Novembre',
    11 => 'Décembre'
);
// remplacer la valeur de Août par Aout
$arrayMonth[7] ='Aout';
echo $arrayMonth[7];

?>