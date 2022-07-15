<?php
function repondre_oui_non(string $phrase):bool{
  while(true){
        $reponse = readline($phrase . " - (o)ui /(n)on : ");
        if($reponse ===  'o'){
            return true;
        }elseif($reponse === 'n') {
            return false;
        }
    }
}
function demander_crenau( $phrase = "Veuillez entrer un créneau : "){
    echo $phrase . "\n";
    while(true){
        $ouverture = (int) readline("Heure d'ouverture : ");
        if($ouverture >= 0 || $ouverture <= 23 ){
            break;
        }
    }
    while(true){
        $fermeture = (int)readline("Heure de fermeture : ");
        if($ouverture >= 0 && $ouverture <= 23 && $fermeture > $ouverture ){
            break;
        }

    }
    return [$ouverture, $fermeture];
}

function demander_crenaux(string $phrase  = "Veuillez entrez vos crénaux : "): array{
    $crenaux =[];
    $continuer = true;
    while ($continuer = true){
        $crenaux[] = demander_crenau();
        $continuer = repondre_oui_non('Voulez-vous continuer ? : ');
    }
    return $crenaux;
    
}
