<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="page1.css">
</head>
<body  style="background: repeating-radial-gradient(circle at 150%,white 20%, #181A72,#181A72); text-align : center;">

	<h1 class="titre">Formulaire Stock</h1>
	<header style="text-align:center">
	<a href="index.php?view=choix_form" class="bulle" style="text-decoration:none">Retour choix formulaire</a>
	</header>

	<div class="gaucheform">
		<h1 style="color:white">Nom de la paire : </h1>
		<?php
		mkForm("controleur.php");
		mkInput('text',"nom_paire",'','placeholder="nom_de_la_paire"');
		?>
		<br>
		<h1 style="color:white">Taille : </h1>
		<?php
		mkInput('number',"taille",'','placeholder="taille" step="0.5"');
		?>
		<br>
		<h1 style="color:white">Prix d'achat : </h1>
		<?php
		mkInput('number',"retail_price",'','placeholder="retail_price" step="0.01"');
		?>
		<br>
		<h1 style="color:white">Date d'achat : </h1>
		<?php
		mkInput('date',"retail_date","",'placeholder="retail_date"');
		?>
		<br>
		<?php
		mkInput('submit','action','ajout_paire','class="boutonsubmit"');
		?>
	</div>
	<div class="droite">
		<h1 style="color:white">Image de la paire : </h1>
		<?php
		mkInput('file','image','','placeholder="image" style="color:white"');
		?>
		<img src="interface_photo/10.1-Bilan_Mois.png">
		<br>
		<h1 style="color:white">Facture de l'achat : </h1>
		<?php
		mkInput('file','facture','','placeholder="facture" style="color:white"');
		endForm();
		?>
		<img src="interface_photo/10.1-Bilan_Mois.png">
	</div>


</body>
</html>