<?php

if (!empty($_POST['perso-update-btn'])) {
    try {
		# première étape : je me connecte au serveur
		$addPerso = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addPerso->exec('SET NAMES utf8');
		
		// je premare ma requête
		$stmt = $addPerso->prepare("UPDATE personnages SET perso_bio = :perso_bio WHERE perso_id = :perso_id");


					// je lui donne les paramètres dont elle a besoin sans en oublier
                    $stmt->bindValue(":perso_bio", $_POST['perso_bio']);
                    $stmt->bindValue(":perso_id", $_GET['perso_id']);

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
                }catch (PDOException $exception){
                    echo $exception->getMessage();
            }
		} 
