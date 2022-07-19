<?php
$user = [
    'prenom' => 'Eurin',
    'nom' => 'HASH',
    'age' => 18
];
setcookie('utilisateur', serialize($user));
require 'elements/header.php';
?>
<?php 
if($nom) : ?>
    <h1>Bonjour <?=htmlentities($nom)  ?> </h1>
    <a href="profil.php?action=deconnecter">Se déconnecter</a>
<?php endif ?>

<div class="container">
    <br>
    <form action="" method="POST"> 

        <div class="form-group">
            <input class="form-control" type="text" value="" name="nom" placeholder="Votre nom"> <br>
            <button class="btn btn-primary" type="submit">Se connecter</button>
        </div>

    </form>
</div>
<br>

<?php
require 'elements/footer.php';
?>
