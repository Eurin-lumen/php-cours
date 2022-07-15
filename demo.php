<?php

$mot  = readline("Veuillez entrer un mot: ");
$reverse =strtolower(strrev($mot)); 
if (strtolower($mot) === $reverse){
    echo "$mot ; est un palyndrome";
}else{
    echo "$mot ; n'est pas un palyndrome";
}