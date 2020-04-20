<?php
// exemple de requete join : 
// SELECT `jedi`.`jedi_prenom`, `jedi`.`jedi_nom`, `rang`.`rang_nom` FROM  `jedi` JOIN `rang` ON (`jedi`.`jedi_rang` = `rang`.`rang_id`);
// j'inclus le fichier contenant les paramètres
require_once("config.php");

// Je me connecte à la BDD
try {
    $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $dbuser, $dbpass);
    $pdo->exec('SET NAMES utf8');
    $categories = $pdo->query("SELECT * FROM les_archives");
    $citations = $pdo->query("SELECT citation_description FROM citation ORDER BY RAND () LIMIT 1");

    // $NAME = $pdo->query("");
    // $NAME->setFetchMode(PDO::FETCH_ASSOC);
}  catch (Exception $exception) {

    $messageError = $exception->getMessage();

}

?>