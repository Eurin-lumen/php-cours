<?php 
$erreur = null;
$succes = null;
$value = null;
$aDeviner = 150;
require 'header.php';
?>
<br>
<div class="container">



<?php if(isset($_GET['chiffre'])): ?>
    <?php 
        if($_GET['chiffre'] > $aDeviner){
            $erreur = "Votre chiffre est trop grand";
        }elseif($_GET['chiffre'] < $aDeviner){
            $erreur= "Votre chiffre est trop petit";
        }else{
            $succes = "Bravo ! vous avez devineé le chiffre";
        }
        $value=(int) $_GET['chiffre'];
        
        ?>
<?php endif?>

<?php if($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur; ?>
    </div>
<?php elseif ($succes): ?>
    <div class="alert alert-success">
        <?= $succes ?>
    </div>
<?php endif ?>

<div class="form-group">
    <form action="/jeu.php" method="GET">
        <input class="form-control" type="number" value="<?= $value ?>" name = "chiffre" placeholder="Entre (0 et 1000)"> <br>
        <button type="submit"  class="btn btn-primary">Deviner</button>
    </form>
</div>
        
    

</div>
<br>
<br>


<?php require 'footer.php';?>