<!DOCTYPE html>
<html>
<head>
	<title>Page de vue de la liste des étudiants</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../pages_css/page12.css">
</head>

<center>
    <header class="go0">
        
            <h2>BIENVENUE DANS L'APPLICATION WEB DE GESTION DE LA SCOLARITE: <span class="go2">QUEENCHAMA</span></h2>

    </header>
</center>

<body >
    <div>
	<center>
        <p class="go1">Page de vue globale sur les étudiants inscrits</p>
	<?php
     try {

     	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bd= new PDO('mysql:host=localhost;dbname=applifinal','root','',$pdo_options);

        $requete= $bd->query('SELECT nom, prenom, matricule, age, telephone, quartier, niveau, filiere, motif, somme FROM etd ORDER BY filiere ');
        ?>
        <table>
        	<thead>
        		<tr>
        		    <th>Nom</th>
        		    <th>Prenom</th>
        		    <th>Matricule</th>
        		    <th>Age</th>
        		    <th>Téléphone</th>
        		    <th>Quartier</th>
        		    <th>Niveau</th>
        		    <th>Filiere</th>
        		    <th>Motif</th>
        		    <th>Somme</th>
        		</tr>
        	</thead>

            


        <?php
      
        while($donnees= $requete->fetch()){
        ?>
        <tbody>
            	<tr>
            		<td> <?php  echo $donnees['nom']; ?> </td>
            		<td> <?php  echo $donnees['prenom']; ?> </td>
            		<td> <?php  echo $donnees['matricule']; ?> </td>
            		<td> <?php  echo $donnees['age']; ?> </td>
            		<td> <?php  echo $donnees['telephone']; ?> </td>
            		<td> <?php  echo $donnees['quartier']; ?> </td>
            		<td> <?php  echo $donnees['niveau']; ?> </td>
            		<td> <?php  echo $donnees['filiere']; ?> </td>
            		<td> <?php  echo $donnees['motif']; ?> </td>
                    <td> <?php  echo $donnees['somme']; ?> </td>
            	</tr>	
        </tbody>
       
    <?php   

        }
        $requete->closeCursor();
     	
     } catch (Exception $e) {

     	die('Erreur : ' . $e->getMessage());

     }
	?>
	   </table>
    </center>
  </div>
<center>
<footer>
    <h2>Conçu et Réalisé par TALLING DJAFA CHANNEL BORRIS</h2>
    <p>Me contacter tel: +237653667143</br>
        e-mail: djafachannel@gmail.com
    </p>
    <p><h3>Copyright@2020 Tous droits réservés </h3></p>
</footer>
</center>

</body>
</html>