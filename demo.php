<?php

$mot  = readline("Veuillez entrer un mot: ");
$reverse = strrev($mot);
if($mot === $reverse){
    echo "$mot ; est un palyndrome";
}else{
    echo "$mot ; n'est pas un palyndrome";
}