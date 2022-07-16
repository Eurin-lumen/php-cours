<?php

function nav_item(string $lien, string $titre, string $linkClass = ''): string
{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }
    return '<li class="' .
        $classe .
        '">
                <a class="nav-link" href="' .
        $lien .
        '">' .
        $titre .
        '</a>
            </li>';
}

function nav_menu(string $linkClass = ''):string {
  return 
          nav_item('/index.php', 'Accueil', $linkClass) .
          nav_item('/blog.php', 'Blog', $linkClass).
          nav_item('/contact.php', 'Contact', $linkClass);


}

?>
