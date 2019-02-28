
<?php
$eleve = [
    prenom => 'Marc',
    nom => 'Doe',
    note => [10,20,18,9]
];

print_r($eleve);

$eleve['prenom']  = 'Jean';
$eleve['note'][2] = 19 ;



print_r($eleve);

$classe = [
        [   'nom' => 'Doe',
            'prenom' => 'John',
            'notes' => 15
        ],
        [   'nom' => 'Doe',
            'prenom' => 'Jane',
            'notes' => 16
        ]
    ];

echo $classe[1]['notes'];
?>
