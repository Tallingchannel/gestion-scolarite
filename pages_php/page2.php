<!DOCTYPE html>
<html>
<head>
	<title>Redirection1</title>
</head>
<body>
	<?php
	if (isset($_POST['mdp']) && $_POST['mdp']=='queenchama' && isset($_POST['name'])) 
{
	

header("Location: page3.php");


}

else
{

echo "Login ou mot de passe incorrect. Merci de recommencer";
}
?>
</body>

</html>