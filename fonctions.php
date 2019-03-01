<?php

/* $a = strtolower(readline('Saisissez un mot : '));
$b = strrev ($a);

if ($a === $b){
    echo $b . ' est le palindrome de '. $a;
    }
else {
    echo $b . ' nest pas le palindrome de '. $a;
    }


 */


$notes= [15,12,17];

$somme = array_sum ($notes);
$nombre = count($notes);
$moyenne = $somme / $nombre;

echo number_format($moyenne,2,',',' ');





?>


