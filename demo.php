<?php
/*
On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
*/

// On demande à l'utilisateur de rentrer un creneaux
    // On vérifie que l'heure de début < l'heure de fin
    // On demande si on veut rajouter un nouveau creneaux (o/n)
// On demande à l'utilisateur de rentrer une heure
// On affiche l'état d'ouverture du magasin

$creneaux = [];

while (true) {
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int)readline('Heure de fermeture : ');
    if ($debut >= $fin) {
        echo "Le créneaux ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture ($fin)";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Entrer un nouveau créneau ? (n) : ');
        if ($action === 'n') {
            break;
        }
    }
}

// Le magasin est ouvert de 14h à 18h et de 9h à 12h

echo 'Le magasin est ouvert de';
foreach($creneaux as $k => $creneau) {
    if ($k > 0) {
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h";
}

/*
$heure = (int)readline("A qu'elle heure voulez vous visiter le magasin ?");
$creneauTrouve = false;

foreach($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Désolé, le magasin sera fermé :(';
}
*/