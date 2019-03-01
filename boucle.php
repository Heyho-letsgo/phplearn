<?php
/* $chiffre = null;

while ($chiffre !== 10) {
    $chiffre = (int)readline('Saisissez un chiffres : ');
}

echo 'Bravo'; */

/* echo 'Boucle for';
$chiffre = null;
for ($i = 0; $i < 10; $i++ ) {
    echo "- $i \n";
} */

/* echo "Boucle foreach \n";
$notes = [15,12,10];
foreach($notes as $note) {
    if ($note > 12)
    echo "- $note \n";
} */

/* $eleves = [
    'cm2' => ['Jean', 'Pierre', 'Maude', 'Bastien'],
    'cm1' => ['Michel', 'Natacha'] 
];
foreach ($eleves as $classe => $listeEleves){
    echo "$classe \n";
    foreach ($listeEleves as $eleve){
        echo"- $eleve \n";
    }
}
 */

// PSEUDO CODE
//Tant que l'utilisateur ne tape pas FIN
   // On ajoute la note tapée au tableau de note 
// POUR CHAQUE note DANS notes
    // ON AFFICHE " - note"

/* $notes = [];
$action = null;
while ($action != 'fin'){
    $action = (int)readline('Saisissez une note ou \'fin\' pour terminer la saisie : ');

    if ($action != 'fin') {
        $notes[] = (int)$action; 
    }
}
foreach ($notes as $note){
    echo "- $note \n";
} */
//----------------------------------
//L'utilisateur rentre les horaires d'ouverture d'un magasin
//L'utilisateur saisi une heure et on lui dit si le magasin est ouver.

// PSEUDO CODE
//L'utilisateur saisi une heure d'ouverture du matin 
//L'utilisateur saisi une heure de fermeture du matin 
//L'utilisateur saisi une heure d'ouverture de l'après-midi 
//L'utilisateur saisi une heure de fermeture de l'après-midi
//L'utilisateur saisi une heure et il sait si le magasin est ouver ou fermé.

/* $matinOuverture = (int)readline("Saisissez l'heure d'ouverture du matin : ");
$matinFermeture = (int)readline("Saisissez l'heure de fermeture du matin : ");
while ($matinFermeture <= $matinFermeture) {
    echo "Vous devez saisir une heure supérieure à l'heure d'ouverture... \n";
    echo $matinOuverture ;
    $matinFermeture = (int)readline("Saisissez l'heure de fermeture du matin : ");
    break;
}
$AmOuverture = (int)readline("Saisissez l'heure d'ouverture de l'Am : ");
$AmFermeture = (int)readline("Saisissez l'heure de fermeture de l'Am : ");
$question = (int)readline("Le magasin est il ouvert à ? : ");

if (($question>= $matinOuverture && $question<= $matinFermeture)||($question>= $AmOuverture && $question<= $AmFermeture)){
    echo 'Le magasin est ouvert !';
    }
else {
    echo 'Le magasin est fermé';
} */
//  Le même avec un tableau... 
// en fait on veux pouvoir créer plusieurs crénaux
// Enfin, on veux afficher les horaires du magasin

$crenaux = [];
while (true){
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int)readline('Heure de fermeture : ');
    if ($debut >= $fin){
        echo "Le crénaux ne peut pas être enregistré car l'heure d'ouverture {$debut} est supérieur à l'heure de fermeture";
    } 
    else{
        $crenaux[] = [$debut, $fin];
        $action = readline("Voulez vous enregistrer un nouveau créneau (o/n)");
        if ($action === 'n'){
            break;
        }
        

    }
}

$heure = (int)readline("A quelle heure voulez-vous visiter le magasin ? : ");
$crenauxTrouve = false;

foreach ($crenaux as $crenau) {
    if ($heure >= $crenau[0] && $heure <= $crenau[1]){
        $crenauxTrouve = true;
        break;
    }
    
}

if ($crenauxTrouve){
    echo"Le magasin sera ouvert.";
}
else{
    echo"Le magasin sera fermé.";
    }

echo "\nLe magasin est ouvert de ";
foreach ($crenaux as $k => $crenau){
    if ($k > 0) {
        echo ' et de';
    }
    echo " $crenau[0] h à $crenau[1] h ";
    
}



//print_r($crenaux);



?>