<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnages - Les archives</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/holocron-icon.png">
</head>
<body>
<?php
    require_once('includes/bdd.php');
    include ('includes/header.php');
    
?>
<?php

echo '<main id="main-personnage">';
echo '<article class="article">';

    foreach($personnages as $personnage){
    
// j'afficher chaque ligne dans une card
echo '<a href="article-personnage.php?perso_id='.$personnage['perso_id'].'" id="lien-categories">
        <div class="theBlockInto">
            <img class="categories-img" src="'.$personnage['perso_img'].'" alt="image">
            <h5 class="categories-title">'.$personnage['perso_prenom']."<br>".$personnage['perso_nom'].'</h5>
        </div>
      </a>';
}
//on affiche rien car on ne veut pas qu'un visiteur puisse supprimer ou ajouter
if (!empty($_SESSION) && $_SESSION['user']->utilisateur_role >= 2) {
        include ('includes/formSupPerso.php'); 
        include ('includes/formAddPerso.php');
        echo'<div class="bloc-management"><img class="add" src="images/moins.png" style="cursor: pointer"></div>';
        echo'<div class="bloc-management"><img class="add" src="images/plus.png" style="cursor: pointer"></div>';     
}
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
