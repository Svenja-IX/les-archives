<?php 

if (!empty($_POST['utilisateur_mail']) && isset($_POST['utilisateur_mdp'])) {
    try{
		$sql = new PDO("mysql:host=localhost;dbname=les_archives", "root");

		// je premare ma requête
		$stmt = $sql->prepare("");
		
		// je lui donne les paramètres dont elle a besoin sans en oublier
		$stmt->bindValue(":", $_POST['']);
		$stmt->bindValue(":", $_POST['']);
		$stmt->bindValue(":", $_POST['']);
		$stmt->bindValue(":", $_POST['']);

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