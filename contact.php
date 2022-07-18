<?php
// fuseau horaire
 
$title = "Contact";
$nav = "Nous Contacter";
require_once "config.php";
require_once "functions.php";
date_default_timezone_set('Africa/Porto-Novo');
$heure = (int)($_GET['heure']) ?? date('G');
$jour = (int) ($_GET['jour'] ?? date ('N') - 1 );
// recuperer les crénaux d'aujourd'hui
$creneaux = CRENAUX[$jour];
$ouvert = in_creneaux($heure, $creneaux);
if($ouvert) { $color = 'green'; } else {$color = 'red';}


require 'header.php';
//$creneaux = crenaux_html(CRENAUX);
?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
        <h2> contactez-nous</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nemo sed eius, <br> voluptas magnam fugiat debitis ullam quos minus facere placeat, ratione nulla quod doloribus aut maxime! Placeat, laborum neque. </p>
        <div class="col-md-5">
          <h2>Horaire l'ouverture </h2>
          <form action="" method="get">
            <div class="form-group">
              <?= select('jour', $jour, JOURS) ?>
             
            <div class="form-group">
              <input type="number" name="heure" id="" value="<?= $heure ?>">
            </div>
            <button class="btn btn-primary" type="submit">Verifier si le magazin est ouvert</button>
          </form>
          <?php if($ouvert): ?>
            <div class="alert alert-success">
              <h2>Le magazin est ouvert </h2>
            </div>
            <div class="alert alert-danger">
              <h2>Le magazin est fermé</h2>
            </div>
          <?php endif ?>
            <ul>
              <?php foreach(JOURS as $k => $jour):?>
                <li <?php if($k ===(int)date('N')); ?> style="color: <?= $color ?> ;" <?php T_ENDIF ?>>
                    <strong> <?=  $jour ?> </strong> :
                    <?= crenaux_html(CRENAUX[$k]); ?> 
                </li>
              <?php endforeach ?>

            </ul>
        </div>
    </div>
  </div>
</div>


<br> <br> <br>
<?php require 'footer.php';?>
