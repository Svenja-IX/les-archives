<?php

if (!empty($_POST['arme_nom']) && isset($_POST['arme_categorie'])) {

	try {
		# première étape : je me connecte au serveur
		$addOrga = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addOrga->exec('SET NAMES utf8');
		// je premare ma requête
		$stmt = $addOrga->prepare("INSERT INTO `armes` (`arme_nom`, `arme_categorie`) VALUES (:arme_nom, :arme_categorie)");

	    // je lui donne les paramètres dont elle a besoin sans en oublier
		$stmt->bindValue(":arme_nom", $_POST['arme_nom']);
		$stmt->bindValue(":arme_categorie", $_POST['arme_categorie']);

		// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
		$stmt->execute();
		
		// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
		// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
		if($stmt->rowCount()==1){
			header("location: index.php");
			header("location: armes.php?success");
		} else {
			header("location: index.php");
			header("location: armes.php?fail");
		}


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}
