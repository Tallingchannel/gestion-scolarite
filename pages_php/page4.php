<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../pages_css/page4.css">
	<title>Page d'ajout des etudiants</title>
</head>
<center>
<header class="go0">
		<div>
			<h2>BIENVENUE DANS L'APPLICATION WEB DE GESTION DE LA SCOLARITE: <span class="go2">QUEENCHAMA</span></h2>

		</div>

	</header>
	</center>

<body>
	<center>
	<form action="page5.php" method="POST" class="go5">

     <center><p class="go3"> Page d'ajout des étudiants </p></center>

		<p><label for="nom">Nom: </label><input type="text" name="nom" placeholder="Ex: Talling" size="50" autofocus id="nom" required/></p>
			<p><label for="prenom" >Prenom: </label><input type="text" name="prenom" placeholder="Ex: channel" size="50" id="prenom" required/></p>
			<p><label for="matricule" >Matricule: </label><input type="text" name="matricule" placeholder="Ex: 01GSI18" size="50"  id="matricule" required/></p>
				<p><label for="age">Age: </label><input type="number" name="age" placeholder="Ex: 24" size="100"  id="age" required/></p>
					<p><label for="telephone" >Telephone: </label><input type="tel" name="telephone" placeholder="Ex: +237653667143" size="35" id="telephone" required/></p>
						<p><label for="quartier">Quartier: </label><input type="text" name="quartier" placeholder="Ex: Mendong" size="50" id="quartier" required/></p>
							<p><label for="niveau">Niveau: </label><input type="number" name="niveau" placeholder="Ex: 2" size="45"  id="niveau" required/></p>
								<p><label for="filiere">Filiere: </label><input type="text" name="filiere" placeholder="Ex: GSI" size="50" id="filiere" required/></p>
									<p><label for="motif">Motif: </label>
										<select name="motif" id="motif">
											<option  value="inscription">inscription </option>
											<option  value=" inscription + tranche1">inscription + tranche1 </option>
											<option value="inscription + tranche1 +tranche2 ">inscription + tranche1 +tranche2 </option>
											<option value="inscription +tranche1 +tranche2 + tranche3">inscription +tranche1 +tranche2 + tranche3 </option> 
                                            <option value="tranche1">tranche1 </option>
                                            <option value="tranche1+tranche2">tranche1+tranche2 </option>
                                            <option value="tranche1+tranche2+tranche3">tranche1+tranche2+tranche3 </option>
                                            <option value="tranche2">tranche2</option>
                                            <option value="tranche2+tranche3">tranche2+tranche3 </option>
                                            <option value="tranche3">tranche3 </option>
										</select></p>
										<p><label for="somme">Somme: </label><input type="number" name="somme" placeholder="Ex: 357500" size="49" id="somme" required/></p>

                  <center> <p ><input type="submit" name="bouton" value="ajouter" class="go6" /></p></center>
	</form>
</center>

</body>

<center>
<footer>
	<h2>Conçu et Réalisé par TALLING DJAFA CHANNEL BORRIS</h2>
	<p>Me contacter tel: +237653667143</br>
		e-mail: djafachannel@gmail.com
	</p>
	<p><h3>Copyright@2020 Tous droits réservés </h3></p>
</footer>
</center>
</html>