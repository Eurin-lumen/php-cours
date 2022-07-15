<?php 

$aDeviner = 150;
require 'header.php';
?>
<br>
<div class="container">
 <?php 
 if($_GET['chiffre']> $aDeviner){
    echo "Votre chiffre est trop grand";
 }elseif($_GET['chiffre'] < $aDeviner){
    echo "Votre chiffre est trop petit";
 }else{
    echo "Bravo ! vous avez devineé le chiffre";
 }


?>
    
    <form action="/jeu.php" method="GET">
        <input type="number" name = "chiffre" placeholder="Entre (0 et 1000)">
        <button type="submit">Deviner</button>

    </form>

</div>
<br>
<br>



<?php require 'footer.php'; ?>