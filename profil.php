<?php 
$age = null; 
if(!empty($_POST['birthday'])){
    setcookie('birthday', $_POST['birthday']);
    $_COOKIE['birthday'] = $_POST['birthday'];
}
if(!empty($_COOKIE['birthday'])){
        $birthday =(int) $_COOKIE['birthday'];
        $age = date('Y') - $birthday;

}



require 'elements/header.php'; ?>

<?php if($age && $age >= 18): ?>
    <h1>Du contenu réservé aux adultes </h1>
<?php elseif ($age !== null): ?>
    <div class="alert alert-danger">Vous n'avez pas l'age pour accéder a ce contenue</div>

<?php else : ?>

<form action="" method="POST">
    <div class="form-group">
        <label for="birthday"> Section réservée pour les adultes, entre votre année de naissance, Entré votre année de naissance</label>
        <select name="birthday" class = "form-control"id="birthday">
            <?php for($i = 2010; $i > 1919; $i--):?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor  ?>
        </select>
    </div>
    <button type="submit">Envoyez</button>
<?php endif ?>

</form>






<br>

<?php
require 'elements/footer.php';
?>
