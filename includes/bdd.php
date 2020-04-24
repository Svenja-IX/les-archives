<?php
// exemple de requete join : 
// SELECT `jedi`.`jedi_prenom`, `jedi`.`jedi_nom`, `rang`.`rang_nom` FROM  `jedi` JOIN `rang` ON (`jedi`.`jedi_rang` = `rang`.`rang_id`);
// j'inclus le fichier contenant les paramètres
require_once("config.php");

// Je me connecte à la BDD
try {
    $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $dbuser, $dbpass);
    $pdo->exec('SET NAMES utf8');

    $personnages = $pdo->query("SELECT * FROM personnages");
    $personnages->setFetchMode(PDO::FETCH_ASSOC);

    $organisations = $pdo->query("SELECT * FROM organisations");
    $organisations->setFetchMode(PDO::FETCH_ASSOC);

    $citations = $pdo->query("SELECT citation_description, citation_perso FROM citation ORDER BY RAND () LIMIT 1");

}  catch (Exception $exception) {

    $messageError = $exception->getMessage();

}

?>