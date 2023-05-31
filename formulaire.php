<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="page1.css">
</head>
<body>

	<h1 class="titre1">Formulaire Stock</h1>

	<div class="gauche">
		<h1>Nom de la paire : </h1>
		<input class="input1" type="text" placeholder="nom_de_la_paire" name="nom_de_la_paire">
		<br>
		<h1>Taille : </h1>
		<input class="input1" type="number" name="taille" placeholder="taille">
		<br>
		<h1>Prix d'achat : </h1>
		<input class="input1" type="number" name="retail_price" placeholder="retail_price">
		<br>
		<h1>Date d'achat : </h1>
		<input class="input1" type="date" name="retail_date" placeholder="retail_date">
	</div>
	<div class="droite">
		<h1>Image de la paire : </h1>
		<input class="input2" type="file" name="image" placeholder="image">
		<img src="interface_photo/10.1-Bilan_Mois.png">
		<br>
		<h1>Facture de l'achat : </h1>
		<input class="input2" type="file" name="facture" placeholder="facture">
		<img src="interface_photo/10.1-Bilan_Mois.png">
	</div>

</body>
</html>