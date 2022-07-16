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
<h1>Composer votre glace</h1>

 <br>
<form action="" method="GET">
   <div class="container">
        <div class="form-group">
            <input type="checkbox" name="parfum[]" id="" value="Fraise"> Fraise <br>
            <input type="checkbox" name="parfum[]" id="" value="Vanille"> Vanille<br>
            <input type="checkbox" name="parfum[]" id="" value="Chocolat"> Chocolat <br>
        </div>
        <button type="submit" class="btn btn-primary">Commander</button>
   </div>
</form>

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