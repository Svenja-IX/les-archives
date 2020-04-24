<?php

if (!empty($_POST['organisation_nom']) && isset($_POST['organisation_categorie'])) {

	try {
		# première étape : je me connecte au serveur
		$addOrga = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addOrga->exec('SET NAMES utf8');
		// je premare ma requête
		$stmt = $addOrga->prepare("INSERT INTO `organisations` (`organisation_nom`, `organisation_categorie`) VALUES (:organisation_nom, :organisation_categorie)");

	    // je lui donne les paramètres dont elle a besoin sans en oublier
		$stmt->bindValue(":organisation_nom", $_POST['organisation_nom']);
		$stmt->bindValue(":organisation_categorie", $_POST['organisation_categorie']);

		// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
		$stmt->execute();
		
		// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
		// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
		if($stmt->rowCount()==1){
			header("location: index.php");
			header("location: organisations.php?success");
		} else {
			header("location: index.php");
			header("location: organisations.php?fail");
		}


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}
