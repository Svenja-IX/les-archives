<?php
require_once ('includes/bdd.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - Les archives</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/holocron-icon.png">
</head>
<body>
<?php
    include ('includes/header.php');
    // include ('includes/formUpdateVaisseau.php');
?>
<main id="main-organisation">
<?php 

try{
    // connexion à la bdd
    $sql = new PDO("mysql:host=localhost;dbname=les_archives", "root");
    $sql->exec('SET NAMES utf8');
    // preparation de la requête
    $pages_organisations = $sql->prepare("SELECT * FROM `organisations` WHERE organisation_id = :organisation_id");
    // je lui donne les paramètres dont elle a besoin sans en oublier
    $pages_organisations->bindValue(":organisation_id", $_GET["organisation_id"]);
    // j'éxécute
    $pages_organisations->execute();
    
    // si la requete n'aboutit pas (car le mail n'a pas été rentré ou existe deja dans la bdd
    // il doit être unique, alors la requete ne s'effectue pas, sinon elle s'effectue
    if($pages_organisations->rowCount()==1){
    
    } else {
        header('Location: article-organisation.php?erreur');
    }
    } catch (PDOException $exception){
        echo $exception->getMessage();
    }

    echo '<article>';

foreach($pages_organisations as $page_organisation){


    // j'afficher chaque ligne dans une card
    echo '
        <div id="article-text">
        <h1 id="article-title">
        '.$page_organisation['organisation_nom'].'
        </h1>
        <div id="article-float-right">
        <img id="article-img" src="'.$page_organisation['organisation_img'].'">
        <ul>
        <li><b>Nom</b> : '.$page_organisation['organisation_nom'].'</li>
        </ul>
        </div>
            <p id="edition">'.$page_organisation['organisation_bio'].'</p>
        </div>';
}

if (!empty($_SESSION) && $_SESSION['user']->utilisateur_role >= 2) {
    echo '<input type="button" value="Modifier" id="arme-update-btn">';
}
echo '</article>';
    //     $link = explode('.', $_SERVER['PHP_SELF']);
    //     $lastLink = strtolower(end($link));
    //     echo $lastLink;
    ?>
</main>
<script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/inline/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="scripts/script.js"></script>*
</body>
</html>