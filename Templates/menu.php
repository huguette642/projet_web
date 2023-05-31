<?php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}

include_once("libs/modele.php"); // listes
include_once("libs/maLibUtils.php");// tprint
include_once("libs/maLibForms.php");// mkTable, mkLiens, mkSelect ...

// Pose qq soucis avec certains serveurs...
echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- **** H E A D **** -->
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>shoesig2i</title>
	<link rel="stylesheet" href="page1.css" />
</head>
<!-- **** F I N **** H E A D **** -->

<body>
	<div class="gauche">
		<h1 class="title">Dashboard</h1>
		<div class="conteneur_menu">
		<a href="index.php?view=stock" style="text-decoration:none" class="bulle" id="stock">Stock</a>
		<br>
		<a href="index.php?view=ventes" style="text-decoration:none" class="bulle" id="ventes">Ventes</a>
		<br>
		<a href="index.php?view=client" style="text-decoration:none" class="bulle" id="client">Client</a>
		<br>
		<a href="index.php?view=bilan" style="text-decoration:none" class="bulle" id="bilan">Bilan</a>
		<br>
		<a href="index.php?view=form" style="text-decoration:none" class="bulle" id="formulaire">Formulaire</a>
		<br>
		<a href="index.php?view=expl" style="text-decoration:none" class="bulle" id="explication">Explications du SQL</a>
		</div>
	</div>
</body>
