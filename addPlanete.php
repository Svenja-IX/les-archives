<?php

if (!empty($_POST['planete_nom']) && isset($_FILES['planete_img'])) {

	try {
		# première étape : je me connecte au serveur
		$addPlanete = new PDO("mysql:host=localhost;dbname=les_archives", "root");
		$addPlanete->exec('SET NAMES utf8');
		
		// je premare ma requête
		$stmt = $addPlanete->prepare("INSERT INTO `planetes` (`planete_nom`, `planete_img`) VALUES (:planete_nom, :planete_img)");

		$file = $_FILES['planete_img'];

        $fileName = $_FILES['planete_img']['name'];
        $fileTmpName = $_FILES['planete_img']['tmp_name'];
        $fileSize = $_FILES['planete_img']['size'];
        $fileError = $_FILES['planete_img']['error'];
        $fileType = $_FILES['planete_img']['type'];

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
					$stmt->bindValue(":planete_nom", $_POST['planete_nom']);
					$stmt->bindValue(":planete_img", $fileDestination);

					// Je l'execute et en fonction de si l'email existe deja ou pas, j'insere ma requete dans la bdd
					$stmt->execute();
		
					// si la requete n'aboutit pas (car le mail n'a pas été rentré car il doit être unique,  
					// alors la requete ne s'effectue pas, si l'email n'est pas dans la bdd la requete se fais sans soucis
					if($stmt->rowCount()==1){
						header("location: index.php");
						header("location: planetes.php?success");
					} else {
						header("location: index.php");
						header("location: planetes.php?fail");
					}
                } else {
                    header("location: planetes.php?fail-fichier-trop-volumineux");
                }
            } else {
                header("location: planetes.php?fail-error");
            }
        } else {
            header("location: planetes.php?fail-fichier-non-valide");
    }

	    


		} catch (PDOException $exception){
			echo $exception->getMessage();
	}

}
