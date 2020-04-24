<?php
require_once ('includes/bdd.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les archives</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/holocron-icon.png">
</head>
<body>
<?php
    include ('includes/header.php');
    // include ('includes/form-inscription.php');
    // include ('includes/form-connexion.php');
?>
    <main id="main-index">
        <article id="article-categorie">

    <a href="personnages.php" id="lien-categories">
    <div class="categories">
        <img class="categories-img" src="images/Jedi_Temple_Guard_vision.png" alt="image">
        <div class="categories-body">
            <h5 class="categories-title">Personnages</h5>
        </div>
    </div>
    </a>

    <a href="organisations.php" id="lien-categories">
    <div class="categories">
        <img class="categories-img" src="images/mandalorian.jpg" alt="image">
        <div class="categories-body">
            <h5 class="categories-title">organisations</h5>
        </div>
    </div>
    </a>

    <a href="armes.php" id="lien-categories">
    <div class="categories">
        <img class="categories-img" src="images/armes.jpg" alt="image">
        <div class="categories-body">
            <h5 class="categories-title">Armes</h5>
        </div>
    </div>
    </a>

    <a href="planetes.php" id="lien-categories">
    <div class="categories">
        <img class="categories-img" src="images/mustafar.png" alt="image">
        <div class="categories-body">
            <h5 class="categories-title">Planetes</h5>
        </div>
    </div>
    </a>

    <a href="vaisseaux.php" id="lien-categories">
    <div class="categories">
        <img class="categories-img" src="images/vaisseaux.png" alt="image">
        <div class="categories-body">
            <h5 class="categories-title">vaisseaux</h5>
        </div>
    </div>
    </a>
</article>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="scripts/script.js"></script>
</body>
</html>