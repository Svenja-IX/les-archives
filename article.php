<?php
require_once ('includes/bdd.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['perso_id']; ?> - Les archives</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/holocron-icon.png">
</head>
<body>
<?php
    include ('includes/header.php');
?>
<main id="main-personnage">
<?php 
include ('includes/formUpdatePerso.php');
try{
    // connexion à la bdd
    $sql = new PDO("mysql:host=localhost;dbname=les_archives", "root");
    $sql->exec('SET NAMES utf8');
    // preparation de la requête
    $pages_personnages = $sql->prepare("SELECT * FROM `personnages` WHERE perso_id = :perso_id");
    // je lui donne les paramètres dont elle a besoin sans en oublier
    $pages_personnages->bindValue(":perso_id", $_GET["perso_id"]);
    // j'éxécute
    $pages_personnages->execute();
    
    // si la requete n'aboutit pas (car le mail n'a pas été rentré ou existe deja dans la bdd
    // il doit être unique, alors la requete ne s'effectue pas, sinon elle s'effectue
    if($pages_personnages->rowCount()==1){
    
    } else {
        header('Location: article.php?erreur');
    }
    } catch (PDOException $exception){
        echo $exception->getMessage();
    }

    echo '<article>';

foreach($pages_personnages as $page_personnage){


    // j'afficher chaque ligne dans une card
    echo '
        <div id="article-text">
        <h1 id="article-title">
        '.$page_personnage['perso_prenom']." ".$page_personnage['perso_nom'].'
        </h1>
        <div id="article-float-right">
        <img id="article-img" src="'.$page_personnage['perso_img'].'">
        <ul>
        <li>Prénom :'.$page_personnage['perso_prenom'].'</li>
        <li>Nom : '.$page_personnage['perso_nom'].'</li>
        <li>Race : '.$page_personnage['perso_race'].'</li>
        <li>Rang : </li>
        </ul>
        </div>
            <p>'.$page_personnage['perso_bio'].'</p>
        </div>';
}

if (!empty($_SESSION) && $_SESSION['user']->utilisateur_role >= 2) {
    echo '<input type="button" value="Modifier" id="perso-update-btn">';
}
echo '</article>';
    //     $link = explode('.', $_SERVER['PHP_SELF']);
    //     $lastLink = strtolower(end($link));
    //     echo $lastLink;
    ?>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="scripts/script.js"></script>
</body>
</html>