<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="page1.css">
</head>
<body  style="background: repeating-radial-gradient(circle at 150%,white 20%, #181A72,#181A72); text-align : center;">

	<h1 class="titre">Modifier informations de vente d'une paire</h1>
	<header style="text-align:center">
	<a href="index.php?view=choix_form" class="bulle" style="text-decoration:none">Retour choix formulaire</a>
	</header>

	<div class="gaucheform" style="text-align:center">
		<h1 style="color:white">Id de la paire à modifier : </h1>
		<?php
		$stock=obtenirVente();
		mkForm("controleur.php");
		mkSelect("idshoes",$stock,"Idshoes","Idshoes","","Name");
		?>
		<br>
		<h1 style="color:white">Nouveau prix de vente :  </h1>
		<?php
		mkInput('number',"prix",'','placeholder="prix de vente" step="0.5"');
		?>
		<br>
		<h1 style="color:white">Nouvelle date de vente : </h1>
		<?php
		mkInput('date',"date",'','');
		?>
		<br>
		<h1 style="color:white">Nouveau client : </h1>
		<?php
		$client = obtenirClient();
		mkSelect("client",$client,"Name","Name","","");
		?>
		<br>
		<?php
		mkInput('submit','action','modif_vente','class="boutonsubmit"');
		endForm();
		?>
	</div>


</body>
</html>