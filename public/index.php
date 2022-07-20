<?php 
require '../vendor/autoload.php';
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();
// charger les routes
require '../config/routes.php';

$match = $router->match();
if(is_array($match)){
    //require '../elements/layout.php';
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

