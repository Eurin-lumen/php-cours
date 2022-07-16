<?php
require_once 'functions.php';
// Checkbox 
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille'=> 3
];
// radio

$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
// checkbox
$supplements = [
    'Pépites de chocolat' => 1,
    'Chantille' => 0.5
];
$title = "composez votre glace";
$ingredient = [];
$total= 0; 
// verification

if(isset($_GET['parfum'])){
    foreach($_GET['parfum'] as $parfum){
        if(isset($parfums[$parfum])){
            $ingredient[] = $parfum;
            $total += $parfums[$parfum]; // ajoute le prix de l'ingrédient
        }
    }
}
if(isset($_GET['supplement'])){
    foreach($_GET['supplement'] as $supplement){
        if(isset($supplements[$supplement])){
            $ingredient[] = $supplement;
            $total += $supplements[$supplement]; // ajoute le prix de l'ingrédient
        }
    }
}
if(isset($_GET['cornet'])){
    $cornet = $_GET['cornet'];
    if(isset($cornets[$cornet])){
        $ingredient[] = $cornet;
        $total += $cornets[$cornet]; // ajoute le prix de l'ingrédient
    }
    
}
require 'header.php';
?>
<br>
<h1 class="">Composer votre glace</h1>

 <br>
<div class="container">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5><div class="card-title">Votre glace</div></h5>
                <ul>
                    <?php  foreach($ingredients as $ingredient):?>
                      <li><?= $ingredient ?></li>  
                    <?php endforeach ?>
                    <p>
                        <strong>Prix : </strong> <?= $total  ?> $
                    </p>
                </ul>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-8">
    <form action="/jeu.php" method="GET">
            <h2>Choissisez vos parfums</h2>
                <?php foreach($parfums as $parfum => $prix):?>
            <div class="container">
                <label for="">
                    <?= checkbox('parfum', $parfum, $_GET) ?>
                    <?= $parfum ?> - <?= $prix ?> $
                </label>
        
            </div>
                <?php endforeach; ?>
            <h2>Choissisez votre Cornet</h2>

                <?php foreach($cornets as $cornet => $prix):?>
            <div class="container">
                <label for="">
                    <?= radio('cornet', $cornet, $_GET) ?>
                    <?= $cornet ?> - <?= $prix ?> $
                </label>
        
            </div>
                <?php endforeach; ?>
            <h2>Choissisez votre supplement</h2>

                <?php foreach($supplements as $supplement => $prix):?>
            <div class="container">
                <label for="">
                    <?= checkbox('supplement', $supplement, $_GET) ?>
                    <?= $supplement ?> - <?= $prix ?> $
                </label>
        
            </div>
                <?php endforeach; ?>

        <br>
        <button type="submit"  class="btn btn-primary">Composer ma glace</button>
    </form>
        </div>
    </div>
</div>
<div class="container">
    <br>
    <h2>$_GET</h2>
        <pre>
            <?php var_dump($_GET) ?>
        </pre>
    <br> <br>

    <h2>$_POST</h2>
        <pre>
            <?php var_dump($_POST) ?>
        </pre>
</div>
  
  <br> <br> <br>
<?php include 'footer.php' ?>