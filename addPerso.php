<?php

if (!empty($_POST['perso_prenom']) && !empty($_POST['perso_nom']) && isset($_POST['perso_categorie'])) {

	try {
		# première étape : je me connecte au serveur
		$addPerso = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addPerso->exec('SET NAMES utf8');
		// je premare ma requête
		$stmt = $addPerso->prepare("INSERT INTO `personnages` (`perso_prenom`, `perso_nom`, `perso_categorie`) VALUES (:perso_prenom, :perso_nom, :perso_categorie)");

	    // je lui donne les paramètres dont elle a besoin sans en oublier
		$stmt->bindValue(":perso_prenom", $_POST['perso_prenom']);
		$stmt->bindValue(":perso_nom", $_POST['perso_nom']);
		$stmt->bindValue(":perso_categorie", $_POST['perso_categorie']);

		// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
		$stmt->execute();
		
		// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
		// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
		if($stmt->rowCount()==1){
			header("location: index.php");
			header("location: personnages.php?success");
		} else {
			header("location: index.php");
			header("location: personnages.php?fail");
		}


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}
