<?php

if (!empty($_POST['utilisateur_prenom']) && !empty($_POST['utilisateur_nom']) && !empty($_POST['utilisateur_mail']) && !empty($_POST['utilisateur_mdp']) && !empty($_POST['utilisateur_confirmMdp'])) {
	if ($_POST['utilisateur_mdp'] == $_POST['utilisateur_confirmMdp']) {
		# code...
	
	try{
		# première étape : je me connecte au serveur
		$sql = new PDO("mysql:host=localhost;dbname=les_archives", "root");

		// je premare ma requête
		$stmt = $sql->prepare("INSERT INTO `utilisateurs` (`utilisateur_prenom`, `utilisateur_nom`, `utilisateur_mail`, `utilisateur_mdp`) VALUES (:utilisateur_prenom, :utilisateur_nom, :utilisateur_mail, :utilisateur_mdp);");
		
		// je lui donne les paramètres dont elle a besoin sans en oublier
		$stmt->bindValue(":utilisateur_prenom", $_POST['utilisateur_prenom']);
		$stmt->bindValue(":utilisateur_nom", $_POST['utilisateur_nom']);
		$stmt->bindValue(":utilisateur_mail", $_POST['utilisateur_mail']);
		$stmt->bindValue(":utilisateur_mdp", password_hash($_POST['utilisateur_mdp'], PASSWORD_DEFAULT));

		// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
		$stmt->execute();
		
		// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
		// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
		if($stmt->rowCount()==1){
			header('Location: index.php?success');
		} else {
			header('Location: index.php?fail');
		}

		} catch (PDOException $exception){
			echo $exception->getMessage();
		}
	} else {
		header('Location: index.php?errormdp');
	}
}
?>
</main>
<script src="scripts/script.js"></script>
</body>
</html>