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

// Pseudo Code
//Tant que l'utilisateur ne tape pas FIN
   // On ajoute la note tapée au tableau de note 
// POUR CHAQUE note DANS notes
// ON AFFICHE " - note"

$notes = [];
$action = null;
while ($action != 'fin'){
    $action = (int)readline('Saisissez une note ou \'fin\' pour terminer la saisie : ');

    if ($action != 'fin') {
        $notes[] = (int)$action; 
    }
}
foreach ($notes as $note){
    echo "- $note \n";
}

?>