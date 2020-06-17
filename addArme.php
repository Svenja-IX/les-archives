<?php

if (!empty($_POST['arme_nom']) && isset($_FILES['arme_img'])) {

	try {
		# première étape : je me connecte au serveur
		$addArme = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addArme->exec('SET NAMES utf8');
		
		// je premare ma requête
		$stmt = $addArme->prepare("INSERT INTO `armes` (`arme_nom`, `arme_img`) VALUES (:arme_nom, :arme_img)");

		$file = $_FILES['arme_img'];

        $fileName = $_FILES['arme_img']['name'];
        $fileTmpName = $_FILES['arme_img']['tmp_name'];
        $fileSize = $_FILES['arme_img']['size'];
        $fileError = $_FILES['arme_img']['error'];
        $fileType = $_FILES['arme_img']['type'];

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
					$stmt->bindValue(":arme_nom", $_POST['arme_nom']);
					$stmt->bindValue(":arme_img", $fileDestination);

					// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
					$stmt->execute();
		
					// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
					// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
					if($stmt->rowCount()==1){
						header("location: index.php");
						header("location: armes.php?success");
					} else {
						header("location: index.php");
						header("location: armes.php?fail");
					}
                } else {
                    header("location: armes.php?fail-fichier-trop-volumineux");
                }
            } else {
                header("location: armes.php?fail-error");
            }
        } else {
            header("location: armes.php?fail-fichier-non-valide");
    }

	    


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}
