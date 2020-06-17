<?php

if (!empty($_POST['vaisseau_nom']) && isset($_FILES['vaisseau_img'])) {

	try {
		# première étape : je me connecte au serveur
		$addVaisseau = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addVaisseau->exec('SET NAMES utf8');
		
		// je premare ma requête
		$stmt = $addVaisseau->prepare("INSERT INTO `vaisseaux` (`vaisseau_nom`, `vaisseau_img`) VALUES (:vaisseau_nom, :vaisseau_img)");

		$file = $_FILES['vaisseau_img'];

        $fileName = $_FILES['vaisseau_img']['name'];
        $fileTmpName = $_FILES['vaisseau_img']['tmp_name'];
        $fileSize = $_FILES['vaisseau_img']['size'];
        $fileError = $_FILES['vaisseau_img']['error'];
        $fileType = $_FILES['vaisseau_img']['type'];

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
					$stmt->bindValue(":vaisseau_nom", $_POST['vaisseau_nom']);
					$stmt->bindValue(":vaisseau_img", $fileDestination);

					// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
					$stmt->execute();
		
					// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
					// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
					if($stmt->rowCount()==1){
						header("location: index.php");
						header("location: vaisseaux.php?success");
					} else {
						header("location: index.php");
						header("location: vaisseaux.php?fail");
					}
                } else {
                    header("location: vaisseaux.php?fail-fichier-trop-volumineux");
                }
            } else {
                header("location: vaisseaux.php?fail-error");
            }
        } else {
            header("location: vaisseaux.php?fail-fichier-non-valide");
    }

	    


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}
