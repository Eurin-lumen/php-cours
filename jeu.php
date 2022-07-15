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
require 'header.php';
?>

<h2>Composez votre glace</h2>



<br>
<div class="container">

    <form action="/jeu.php" method="POST">
        <div class="form-group">
         
        </div>
        <div class="form-group">
           
        </div>
    
            <button type="submit"  class="btn btn-primary">Deviner</button>
            <br>
    </form>


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