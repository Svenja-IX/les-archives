<?php 

if (!empty($_POST['utilisateur_mail']) && !empty($_POST['utilisateur_mdp'])) {

	if(filter_var($_POST['utilisateur_mail'], FILTER_VALIDATE_EMAIL)) {

		try{
			$sql = new PDO("mysql:host=localhost;dbname=les_archives", "root");
			$requeteSQL = "SELECT * FROM `utilisateurs` WHERE utilisateur_mail = :utilisateur_mail";
			// je prepare ma requête
			$connexion = $sql->prepare($requeteSQL);
			
			// je lui donne les paramètres dont elle a besoin sans en oublier
			$connexion->bindValue(":utilisateur_mail", $_POST['utilisateur_mail']);

			// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
			$connexion->execute();
			
			// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
			// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
			if($connexion->rowCount() == 0){
				header("location: index.php");
				header("location: personnages.php?errorLogin=mailInexistant");
				exit;
			} else {
				
				$utilisateur = $connexion->fetch(PDO::FETCH_OBJ);
					// ensuite je test si les mdp correspondent entre eux
					if(password_verify($_POST['utilisateur_mdp'], $utilisateur->utilisateur_mdp)){
						//echo "vous êtes connectés";
						session_start();
						// lorsque l'utilisateur se connecte, rempli une variable de session qui sera accessible de partout
						$_SESSION['user'] = $utilisateur;
					// Je redirige vers la page précédente. Cette page devient totalement invisible pour celui qui navigue sur le site
					header ("Location: $_SERVER[HTTP_REFERER]");
					exit;	
				} else {
					header("Location: index.php?errorLogin=mauvaisMdp");
					exit;
				}			
			}
		}catch(PDOException $exception){
			echo $exception->getMessage();
		}
	} else {
		header("Location: index.php?errorLogin=mailInvalide");
		exit;
	}
} else {
	header("Location: index.php?errorLogin=vide");
	exit;
}