<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="page1.css">
</head>
<body  style="background: repeating-radial-gradient(circle at 150%,white 20%, #181A72,#181A72); text-align : center;">

	<h1 class="titre">Supprimer client</h1>
	<header style="text-align:center">
	<a href="index.php?view=choix_form" class="bulle" style="text-decoration:none">Retour choix formulaire</a>
	</header>

	<div class="gaucheform">
		<h1 style="color:white">Nom du client à supprimer : </h1>
		<?php
		$client = obtenirClient();
		mkForm("controleur.php");
		mkSelect("nom_client",$client,"Name","Name","","");
		echo '<br>';
		mkInput('submit','action','suppr_client','class="bulle submit"');
		endForm();
		?>
	</div>

</body>
</html>