<?php
$creneaux = []; 
while(true){
    $debut = (int)readline("Heure d'ouverture : ");
    $fin = (int)readline("Heure de femerture : ");
    if($debut >= $fin){
        echo "le crénaux ne peut etre enregistré car l'heure d'ouverture ($debut)  est supérieur à l'heure de femerture ($fin) ";
    } else {
        $creneaux[] = [$debut , $fin];
        $action = readline("voulez-vous enregistrer un nouveau créneau (o/n) : ");
        if($action == 'n'){
            break;
        }
    }
}

$heure = (int) readline("À quel heure voulez-vous visiter le magazin ? : ");
$creneauxTrouve = false;
foreach($creneaux as $creneau){
    if($heure >= $creneau[0] &&  $heure <= $creneau[1]){
        $creneauxTrouve = true;
        break;
    }
}
if($creneauxTrouve){
    echo "le magazin sera ouvert";
}else{
    echo "désolé le magazin sera fermé :(";
}
