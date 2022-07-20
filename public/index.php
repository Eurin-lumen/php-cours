<?php 
require '../vendor/autoload.php';
//require '../vendor/altorouter/AltoRouter.php';
require '../elements/header.php';
$uri = $_SERVER["REQUEST_URI"];
$router = new AltoRouter();
$router->map('GET','/' , function(){
    echo "salut";
});
$router->map('GET','/nous-contacter' , function(){
    echo "Nous contacter";
});
$router->map('GET','/blog/[*:slug]-[i:id]' , function($slug, $id ){
    echo "Je suis sur l'article $slug avec le numero $id ";
});

$match = $router->match();
if($match !== false){
    require '../elements/header.php';
    call_user_func_array($match['target'], $match['params']);
    require '../elements/footer.php';

}

