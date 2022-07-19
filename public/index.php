<?php 
require '../vendor/autoload.php';
$page = $_GET['page'] ?? '404';

require '../elements/header.php';
if($page === 'blog'){
    require 'blog/index.php';
}elseif ($page === '404'){
    require 'errors/404.php';
}
require '../elements/footer.php'
?>
