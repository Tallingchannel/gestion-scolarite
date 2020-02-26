<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<title>Page de traitement du formulaire</title>
</head>
<body>
	<?php
     try {

     	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bd= new PDO('mysql:host=localhost;dbname=applifinal','root','',$pdo_options);

        $requete= $bd->prepare('INSERT INTO etd(nom, prenom, matricule, age, telephone, quartier, niveau, filiere, motif, somme) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ');
        $requete->execute(array($_POST['nom'], $_POST['prenom'], $_POST['matricule'], $_POST['age'], $_POST['telephone'], $_POST['quartier'], $_POST['niveau'], $_POST['filiere'], $_POST['motif'], $_POST['somme']));

        header("location: page4.php");

    

        /*while($donnees= $requete->fetch()){

        }
        $requete->closeCursor();*/
     	
     } catch (Exception $e) {

     	die('Erreur : ' . $e->getMessage());

     }
	?>

</body>
</html>