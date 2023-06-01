<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="page1.css">
</head>
<body  style="background: repeating-radial-gradient(circle at 150%,white 20%, #181A72,#181A72); text-align : center;">

	<h1 class="titre">Modifier informations d'achat d'une paire</h1>
	<header style="text-align:center">
	<a href="index.php?view=choix_form" class="bulle" style="text-decoration:none">Retour choix formulaire</a>
	</header>

	<div class="gaucheform" style="text-align:center">
		<h1 style="color:white">Id de la paire à modifier : </h1>
		<?php
		$stock=obtenirStock();
		mkForm("controleur.php");
		mkSelect("idshoes",$stock,"Idshoes","Idshoes","","Name");
		?>
		<br>
		<h1 style="color:white">Nouvelle taille : </h1>
		<?php
		mkInput('number',"taille",'','placeholder="taille" step="0.5"');
		?>
		<br>
		<h1 style="color:white">Nouveau prix d'achat : </h1>
		<?php
		mkInput('number',"retail_price",'','placeholder="retail_price" step="0.01"');
		?>
		<br>
		<h1 style="color:white">Nouvelle date d'achat : </h1>
		<?php
		mkInput('date',"retail_date","",'placeholder="retail_date"');
		?>
		<br>
		<?php
		mkInput('submit','action','modif_stock','class="boutonsubmit"');
		endForm();
		?>
	</div>


</body>
</html>