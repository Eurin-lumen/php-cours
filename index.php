<?php
session_start();
unset($_SESSION['role']);
$title = "Page d'accueil";
$nav = "index";
require 'elements/header.php';?>

    <div class="container">

      <div class="starter-template">
        <br>
        <h1 class="">Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div>
    
    <?php require 'elements/footer.php'; ?>

