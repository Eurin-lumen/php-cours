<?php 
$erreur = null;
$succes = null;
$value = null;
$aDeviner = 150;
require 'header.php';
?>
<br>
<div class="container">



<?php if(isset($_POST['chiffre'])): ?>
    <?php 
        if($_POST['chiffre'] > $aDeviner){
            $erreur = "Votre chiffre est trop grand";
        }elseif($_POST['chiffre'] < $aDeviner){
            $erreur= "Votre chiffre est trop petit";
        }else{
            $succes = "Bravo ! vous avez devineé le chiffre";
        }
        $value=(int) $_POST['chiffre'];
        
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
    <form action="/jeu.php" method="POST">
        <input class="form-control" type="number" value="<?= $value ?>" name = "chiffre" placeholder="Entre (0 et 1000)"> <br>
        <button type="submit"  class="btn btn-primary">Deviner</button>
    </form>
</div>

<h2>$_GET</h2>
<pre>
    <?php var_dump($_GET)?>
</pre>
<br>
<h2>$_POST</h2>
<pre>
    <?php var_dump($_POST)?>
</pre>

</div>
<br>
<br>


<?php require 'footer.php';?>