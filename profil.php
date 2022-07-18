<?php
if(!empty($_GET['action'] === 'deconnecter')){
    unset($_COOKIE['utilisateur']);
    setcookie('utlisateur', '', time() - 10);

}
if(!empty($_COOKIE['utilisateur'])){
    $nom = $_COOKIE['utilisateur'];
}
if(!empty($_POST['nom'])){
    setcookie('utilisateur', $_POST['nom']);
    $nom = $_COOKIE['nom'];

}
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
