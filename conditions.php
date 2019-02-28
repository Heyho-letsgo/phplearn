<?php

$heure = (int)readline('A quelle heure arrivez vous ? : ');
if(($heure >= 9 && $heure <=13)||($heure >= 14 && $heure <=17)){
    echo 'Le magasin sera ouvert !';
}
else{
    echo 'Le magasin sera fermé...';
}






/* $action = (int)readline('Entrez votre action : (1: Attaquer, 2: Défendre, 3: Ne rien faire)');

switch($action) {
    case 1: 
        echo 'J\'attaque !';
        break;
    case 2: 
        echo 'Je défend !';
        break;
    case 3: 
        echo 'Je ne fais rien  !';
        break; 
    default:
        echo 'Commande inconnue';
} */



/* $action = (int)readline('Entrez votre action : (1: Attaquer, 2: Défendre, 3: Ne rien faire)');

if ($action > 10){
        echo "Yop";
    } 
elseif ($action === 10){
        echo 'Vous avez juste la moyenne';
    }
elseif  ($action < 10) {
        echo 'Vous n\'avez pas la moyenne';
    }
else {
    echo 'commande inconnue';
} */




?>