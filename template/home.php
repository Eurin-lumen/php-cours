<h1> Bienvenue sur ma homepage</h1>
<!-- generer la page -->
<a href="<?= $router->generate('contact')?>">Nous contacter</a>
<a href="<?= $router->generate('article', ['id' => 60, 'slug' => 'peu-importe'])?>">Voir l'article</a>