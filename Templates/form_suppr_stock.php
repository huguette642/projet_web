<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="page1.css">
</head>
<body  style="background: repeating-radial-gradient(circle at 150%,white 20%, #181A72,#181A72); text-align : center;">

	<h1 class="titre">Supprimer une paire</h1>
	<header style="text-align:center">
	<a href="index.php?view=choix_form" class="bulle" style="text-decoration:none">Retour choix formulaire</a>
	</header>

	<div class="gaucheform" style="text-align:center">
		<h1 style="color:white">Id de la paire à supprimer : </h1>
		<?php
		$stock=obtenirStock();
		mkForm("controleur.php");
		mkSelect("idshoes",$stock,"Idshoes","Idshoes","","Name");
		echo '<br>';
		mkInput('submit','action','supprimer_paire','class="boutonsubmit"');
		endForm();
		?>
	</div>


</body>
</html>