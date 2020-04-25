<?php

if (!empty($_POST['planete_nom']) && isset($_POST['planete_categorie'])) {

	try {
		# première étape : je me connecte au serveur
		$addOrga = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addOrga->exec('SET NAMES utf8');
		// je premare ma requête
		$stmt = $addOrga->prepare("INSERT INTO `planetes` (`planete_nom`, `planete_categorie`) VALUES (:planete_nom, :planete_categorie)");

	    // je lui donne les paramètres dont elle a besoin sans en oublier
		$stmt->bindValue(":planete_nom", $_POST['planete_nom']);
		$stmt->bindValue(":planete_categorie", $_POST['planete_categorie']);

		// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
		$stmt->execute();
		
		// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
		// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
		if($stmt->rowCount()==1){
			header("location: index.php");
			header("location: planetes.php?success");
		} else {
			header("location: index.php");
			header("location: planetes.php?fail");
		}


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}
