<?php 
require '../vendor/autoload.php';
//require '../vendor/altorouter/AltoRouter.php';
require '../elements/header.php';
$uri = $_SERVER["REQUEST_URI"];
$router = new AltoRouter();
$router->map('GET', '/', 'home');
$router->map('GET','/nous-contacter', 'contact', 'contact');
$router->map('GET','/blog/[*:slug]-[i:id]' , 'blog/article', 'article');

$match = $router->match();
if(is_array($match)){
    require '../elements/header.php';
    if(is_callable($match['target'])){
        call_user_func_array($match['target'], $match['params']);

    }else{
        $params = $match['params'];
        ob_start();
         require "../template/{$match['target']}.php";
        $pageContent = ob_get_clean(); 
    }
    require '../elements/layout.php';

}else{
    echo '404';
}

