<?php

if (isset($_POST['sup_perso_prenom']) && isset($_POST['sup_perso_nom'])) {
	try{
		# première étape : je me connecte au serveur
		$sqlInsc = new PDO("mysql:host=localhost;dbname=les_archives", "root");

		// je premare ma requête
		$stmt = $sqlInsc->prepare("DELETE FROM personnages WHERE perso_prenom = :perso_prenom AND perso_nom = :perso_nom");
		
	// je lui donne les paramètres dont elle a besoin sans en oublier
		$stmt->bindValue(":perso_prenom", $_POST['sup_perso_prenom']);
		$stmt->bindValue(":perso_nom", $_POST['sup_perso_nom']);

		// Je l'execute et en fonction de le personnages existe, puis le supprime de la bdd
		$stmt->execute();
		
		// si existe ou pas
		if($stmt->rowCount()==1){
			header("location: personnages.php?suppressionreussi");
		} else {
			header("location: personnages.php?suppressionfail");
		}


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}