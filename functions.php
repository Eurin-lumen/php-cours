<?php
use function CommonMark\Render\HTML;

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
// controle checkbox
function checkbox(string $name, string $value , array $data): string 
{ /**
    * Notion a bien comprendre en ce qui concerne  les fonctions
    */
    $attribute = '';
    if(isset($data[$name]) && in_array($value, $data[$name])){
        $attribute .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attribute>
HTML;
}
// radio
function radio(string $name, string $value , array $data): string 
{ /**
    * Notion a bien comprendre en ce qui concerne  les fonctions
    */
    $attribute = '';
    if(isset($data[$name]) && $value === $data[$name]){
        $attribute .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="{$name}" value="$value" $attribute>
HTML;
}
function select(string $name, $value,  array $options):string {
    $html_options = [];

    foreach($options as $k => $option ){
        $attributes = $k == $value ?  'selected': '';
        $html_options[] = "<option value='$k' $attributes>$option </option>";


    }
    return "<select class='form-control' name='$name'>" . implode($html_options) .'</select>';
}

function dump($variable){
    echo '<pre>';
    var_dump($variable);

    echo '</pre>';
}
function crenaux_html(array $creneaux){
    if(empty($creneaux) === 0){
        return 'Fermé';
    }
    $phrases =[];
    
    foreach($creneaux as $creneau){
        $phrases[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
    }
    return 'Ouvert ' . implode( ' et ', $phrases);
}

function in_creneaux(int $heure, array $creneaux): bool {
    foreach($creneaux as $creneau){
        $debut = $creneau[0];
        $fin = $creneau[1];
        if($heure >= $debut && $heure  < $fin ){
            return true;
        }
    }
    return false;

}

