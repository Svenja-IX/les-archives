<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisations - Les archives</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/holocron-icon.png">
</head>
<body>
<body>
<?php
    require_once('includes/bdd.php');
    include ('includes/header.php');
    include ('includes/formAddOrga.php'); 
?>
<?php
echo '<main id="main-personnage">';
echo '<article class="article">';

    foreach($organisations as $organisation){
    
    // j'afficher chaque ligne dans une card
    echo '<a href="'.$organisation['organisation_nom'].".php".'" id="lien-categories">
            <div class="theBlock">
                <img class="categories-img" src="'.$organisation['organisation_img'].'" alt="image">
                <h5 class="categories-title">'.$organisation['organisation_nom'].'</h5>
            </div>
        </a>';
    }
    include ('includes/plus.php');
    echo '</article>';
    echo '</main>';
?>


<!-- <a href="#" id="lien-categories">
    <div class="categories">
        <img class="categories-img" src="images/mandalorian.jpg" alt="image">
        <div class="categories-body">
            <h5 class="categories-title">organisations</h5>
        </div>
    </div>
    </a> -->
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="scripts/script.js"></script>
</body>
</html>