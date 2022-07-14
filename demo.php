<?php
$heure = (int) readline('Entrez une heure : ');

if((9 >  $heure || $heure > 12) && (14 > $heure || $heure > 17 )){
    echo "le magazin sera fermé";

}else{
    echo " le magazin sera ouvert";
}