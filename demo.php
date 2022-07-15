<?php
function repondre_oui_non($phrase){

  while(true){

        $reponse = readline($phrase . " - (o)ui /(n)on : ");
        if($reponse ===  'o'){
            return true;
        }elseif($reponse === 'n') {
            return false;
        }

  }

}
function demander_crenaux($phrase = "Veuillez entrer un créneau"){
    echo $phrase . "\n";
    while(true){
        $ouverture = (int) readline("Heure d'ouverture : ");
        if($ouverture >= 0 || $ouverture <= 23 ){
            break;
        }
    while(true){
        $fermeture = (int)readline("Heure de fermeture : ");
        if($ouverture >= 0 && $ouverture <= 23 && $fermeture > $ouverture ){
            break;
        }

    }
    return [$ouverture, $fermeture];
    $fermeture = readline("Heure de fermeture : ");
}

//$resultat = repondre_oui_non('Voulez-vous continuer ? : ');
$creneau = demander_crenaux();
$creneau2 = demander_crenaux('Veuillez entrez votre crénau');
var_dump($creneau, $creneau2);