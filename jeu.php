<?php
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
require 'header.php';
?>
<br>
<h1 class="">Composer votre glace</h1>

 <br>
<div class="container">
    <form action="/jeu.php" method="GET">
    <?php foreach($parfums as $parfum => $prix):?>
        <div class="container">
            <label for="">
                <?= checkbox('parfum', $parfum, $_GET) ?>
                <?= $parfum ?> - <?= $prix ?> $
            </label>
    
        </div>
    <?php endforeach; ?>
    <br>
    <button type="submit"  class="">Composer ma glace</button>

        
</form>

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