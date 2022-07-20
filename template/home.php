<h1> Bienvenue sur ma homepage</h1>
<!-- generer la page -->
<a href="<?= $router->generate('contact')?>">Nous contacter</a>
<a href="<?= $router->generate('article', [ 'slug' => 'peu-importe','id' => 60])?>">Voir l'article</a>
