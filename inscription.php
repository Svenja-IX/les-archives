<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les archives</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/holocron-icon.png">
</head>
<body>
<main>
<?php 
include ('includes/header.php');

if (!empty($_POST['user_prenom']) && !empty($_POST['info_password']) && !empty($_POST['user_email']) && !empty($_POST['user_password'])) {
	try{
		# première étape : je me connecte au serveur
		$sqlInsc = new PDO("mysql:host=localhost;dbname=entrainementphpbdd", "root");

		// je premare ma requête
		$stmt = $sqlInsc->prepare("INSERT INTO `info` (`info_id`, `info_prenom`, `info_nom`, `info_mail`, `info_password`) VALUES (NULL, :info_prenom, :info_nom, :info_email, :info_password);");
		
		// je lui donne les paramètres dont elle a besoin sans en oublier
		$stmt->bindValue(":user_prenom", $_POST['user_prenom']);
		$stmt->bindValue(":user_nom", $_POST['user_nom']);
		$stmt->bindValue(":user_email", $_POST['user_email']);
		$stmt->bindValue(":user_password", password_hash($_POST['user_password'], PASSWORD_DEFAULT));

		// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
		$stmt->execute();
		
		// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
		// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
		if($stmt->rowCount()==1){
			echo "<main id='insertMessage'>insertion réussie !</main>";
		} else {
			echo "<main id='insertMessage' style='background:black'>insertion foirée !</main>";
		}

		} catch (PDOException $exception){
			echo $exception->getMessage();
	}
}
?>
</main>
<script src="scripts/script.js"></script>
</body>
</html>