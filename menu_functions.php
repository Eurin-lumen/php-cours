<?php
function nav_item(string $lien, string $titre):string
{
  $classe = 'nav-item';
  if($_SERVER['SCRIPT_NAME'] === $lien){
    $classe .= ' active';
  }
 return'<li class="'. $classe .'">
    <a class="nav-link" href="'.$lien.'">'.$titre.'</a>
  </li>';
  

}

?>
