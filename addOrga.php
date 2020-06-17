<?php

if (!empty($_POST['organisation_nom']) && isset($_FILES['organisation_img'])) {

	try {
		# première étape : je me connecte au serveur
		$addOrga = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addOrga->exec('SET NAMES utf8');
		
		// je premare ma requête
		$stmt = $addOrga->prepare("INSERT INTO `organisations` (`organisation_nom`, `organisation_img`) VALUES (:organisation_nom, :organisation_img)");

		$file = $_FILES['organisation_img'];

        $fileName = $_FILES['organisation_img']['name'];
        $fileTmpName = $_FILES['organisation_img']['tmp_name'];
        $fileSize = $_FILES['organisation_img']['size'];
        $fileError = $_FILES['organisation_img']['error'];
        $fileType = $_FILES['organisation_img']['type'];

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
					$stmt->bindValue(":organisation_nom", $_POST['organisation_nom']);
					$stmt->bindValue(":organisation_img", $fileDestination);

					// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
					$stmt->execute();
		
					// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
					// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
					if($stmt->rowCount()==1){
						header("location: index.php");
						header("location: organisations.php?success");
					} else {
						header("location: index.php");
						header("location: organisations.php?fail");
					}
                } else {
                    header("location: organisations.php?fail-fichier-trop-volumineux");
                }
            } else {
                header("location: organisations.php?fail-error");
            }
        } else {
            header("location: organisations.php?fail-fichier-non-valide");
    }

	    


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}
