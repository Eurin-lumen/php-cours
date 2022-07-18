<?php 
$fichier = __DIR__ .DIRECTORY_SEPARATOR.'demo.txt';

/* partie ecriture 
$size=  @file_put_contents($fichier, 'Salut marc comment tu vas  ?');
if($size === false){
    echo "impossible d'écrire dans le fichier";
}else{
    echo "Ecriture réussie";
}
*/
echo file_get_contents($fichier);