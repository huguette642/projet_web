<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="page1.css">
</head>
<body  style="background: repeating-radial-gradient(circle at 150%,white 20%, #181A72,#181A72); text-align : center;">

	<h1 class="titre">Modifier un client</h1>
	<header style="text-align:center">
	<a href="index.php?view=choix_form" class="bulle" style="text-decoration:none">Retour choix formulaire</a>
	</header>

	<div class="gaucheform">
		<h1 style="color:white">Nom du client à modifier: </h1>
		<?php
		$client = obtenirClient();
		mkForm("controleur.php");
		mkSelect("nom_client",$client,"Name","Name","","");
		?>
		<h1 style="color:white">Nouveau nom du client : </h1>
		<?php
		mkInput('text',"newnom",'','placeholder="nom du client"');
		?>
		<br>
		<h1 style="color:white">Frais acheteur : </h1>
		<?php
		mkInput('number',"fraisa",'','placeholder="Frais acheteur" step="0.05"');
		?>
		<br>
		<h1 style="color:white">Frais vendeur : </h1>
		<?php
		mkInput('number',"fraisv",'','placeholder="Frais vendeur" step="0.05"');
		?>
		<br>
		<h1 style="color:white">Lien site : </h1>
		<?php
		mkInput('text',"lien","",'placeholder="lien du site"');
		?>
		<br>
		<?php
		mkInput('submit','action','ajout_client','class="bulle submit"');
		endForm();
		?>
	</div>

</body>
</html>