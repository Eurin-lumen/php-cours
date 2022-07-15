<?php
// filtre a insulte
$insultes = ['merde', 'con'];
$astérisque =[];
foreach($insultes as $insulte){  
    $astérisque[] =  substr($insulte, 0, 1) .  str_repeat('*', strlen($insulte)- 1);
}
$phrase = readline('Entrez une phrase : ');
$phrase = str_replace($insultes,['*****', '*****'], $phrase);
echo $phrase;