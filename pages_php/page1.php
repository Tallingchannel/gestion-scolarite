<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../pages_css/page1.css">
	<title>Page de connexion</title>
</head>
<center>
<header class="go1">

			<h2>BIENVENUE DANS L'APPLICATION WEB DE GESTION DE LA SCOLARITE: <span class="go2">QUEENCHAMA</span></h2>

</header>
</center>
<body>

<center>
	

<form action="page2.php" method="POST" class="go3">
	<marquee>
	<?php

      echo "NB: Veuillez entrer les informations suivantes pour continuer";
	?>
</marquee>
	<p><label for="name"> .....Name: </label><input type="name" name="name" id="name" required></p>
	<p><label for="mdp">Password: </label><input type="Password" name="mdp" id="mdp" required></p>
	<input type="submit" name="bouton1" value="Valider">

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