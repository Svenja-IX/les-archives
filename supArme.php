<?php

if (isset($_POST['sup_arme_nom'])) {
	try{
		# première étape : je me connecte au serveur
		$sqlInsc = new PDO("mysql:host=localhost;dbname=les_archives", "root");

		// je premare ma requête
		$stmt = $sqlInsc->prepare("DELETE FROM armes WHERE arme_nom = :arme_nom");
		
	// je lui donne les paramètres dont elle a besoin sans en oublier
		$stmt->bindValue(":arme_nom", $_POST['sup_arme_nom']);

		// Je l'execute et en fonction de le personnages existe, puis le supprime de la bdd
		$stmt->execute();
		
		// si existe ou pas
		if($stmt->rowCount()==1){
			header("location: armes.php?suppressionreussi");
		} else {
			header("location: armes.php?suppressionfail");
		}


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}