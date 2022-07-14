<?php
$notes = [10, 15, 16];
$eleves = [
    'cm2' => ['jean', 'eurin', 'merveille', 'victoire'],
    'cm1' => ['eurin', 'belle', 'elsa', 'auri']
];

    foreach ($eleves as $classe => $listEleves) {
        # code...
        echo "la classe $classe : \n";
        foreach($listEleves as $eleves){
            echo "- $eleves\n";
        }
        echo "\n";
    }