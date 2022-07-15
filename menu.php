<?php 
    if(!function_exists(('nav_item'))){
        function nav_item(string $lien, string $titre, string $linkClass=''):string
        {
            $classe = 'nav-item';
            if($_SERVER['SCRIPT_NAME'] === $lien){
                $classe .= ' active';
            }
            return'<li class="'. $classe .'">
                <a class="nav-link" href="'.$lien.'">'.$titre.'</a>
            </li>';
            

        }
    }
?>
<?= nav_item('/index.php', 'Accueil', $class);?>
<?= nav_item('/blog.php', 'Blog', $class);?>
<?= nav_item('/contact.php', 'Contact', $class);?>