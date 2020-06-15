<?php

if (!empty($_POST['perso_prenom']) && !empty($_POST['perso_nom']) && isset($_FILES['perso_img'])) {

	try {
		# première étape : je me connecte au serveur
		$addPerso = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addPerso->exec('SET NAMES utf8');
		
		// je premare ma requête
		// $stmt = $addPerso->prepare("UPDATE `personnages` SET `perso_prenom`= :perso_prenom,`perso_nom`= :perso_nom,`perso_img`= :perso_img,`perso_bio`= :perso_bio,`perso_categorie`= :perso_categorie,`perso_race`= :perso_race WHERE perso_id = :perso_id ");
		$stmt = $addPerso->prepare("UPDATE `personnages` SET `perso_prenom`= :perso_prenom,`perso_nom`= :perso_nom,`perso_img`= :perso_img,`perso_bio`= :perso_bio WHERE perso_id = :perso_id ");

		$file = $_FILES['perso_img'];

        $fileName = $_FILES['perso_img']['name'];
        $fileTmpName = $_FILES['perso_img']['tmp_name'];
        $fileSize = $_FILES['perso_img']['size'];
        $fileError = $_FILES['perso_img']['error'];
        $fileType = $_FILES['perso_img']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);

                    // je lui donne les paramètres dont elle a besoin sans en oublier
                    $stmt->bindValue(":perso_id", $_GET["perso_id"]);
					$stmt->bindValue(":perso_prenom", $_POST['perso_prenom']);
                    $stmt->bindValue(":perso_nom", $_POST['perso_nom']);
                    $stmt->bindValue(":perso_bio", $_POST['perso_bio']);
                    // $stmt->bindValue(":perso_categorie", $_POST['perso_categorie']);
                    // $stmt->bindValue(":perso_race", $_POST['perso_race']);
					$stmt->bindValue(":perso_img", $fileDestination);

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
                } else {
                    header("location: personnages.php?fail-fichier-trop-volumineux");
                }
            } else {
                header("location: personnages.php?fail-error");
            }
        } else {
            header("location: personnages.php?fail-fichier-non-valide");
    }

	    


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}
