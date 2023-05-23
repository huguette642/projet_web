<?php

/*
Dans ce fichier, on définit diverses fonctions permettant de récupérer des données utiles pour notre TP d'identification. Deux parties sont à compléter, en suivant les indications données dans le support de TP
*/


/********* PARTIE 1 : prise en main de la base de données *********/


// inclure ici la librairie faciliant les requêtes SQL
include_once "maLibSQL.pdo.php";
// SQLSelect, SQLGetChamp, SQLInsert, SQLUpdate, SQLDelete
// TODO : CRUD des utilisateurs 
// Create, Read, Update, Delete 
// partie1, partie2 dans fichier modele.php 

// NEVER TRUST USER INPUT 
// Attention aux injections SQL !!!
// 1) encadrer les entrées dans les requetes par des '
// 2) entrées sont protégées par la fonction valider 
// qui banalise les caractères spéciaux SQL, notamment ' 

function obtenirStock() {
	$SQL = "SELECT *
			FROM Stock";
	return ParcoursRs(SQLSelect($SQL));
}

function obtenirVente() {
	$SQL = "SELECT *
			FROM Ventes";
	return ParcoursRs(SQLSelect($SQL));
}

function obtenirClient() {
	$SQL = "SELECT *
			FROM Customer";
	return parcoursRs(SQLSelect($SQL));
}

function obtenirBilanTotal() {
	$var1 = obtenirBeneficeTotal();
	$var2 = obtenirNbVente();
	$var3 = obtenirNbStock();
	return $var1 . $var2 . $var3;
}
function obtenirBeneficeTotal() {
	$SQL = "SELECT (SUM(v.Resale_price)-SUM(s.Retail_price))
			FROM Stock AS s
			JOIN Sales AS v
			ON s.Idshoes = v.Idshoes";
	return SQLGetChamp($SQL);
}

function obtenirNbVente() {
	$SQL = "SELECT COUNT(*)
			FROM Sales";
	return SQLGetChamp($SQL);
}

function obtenirNbStock() {
	$SQL = "SELECT COUNT(*)
			FROM Stock";
	return SQLGetChamp($SQL);
}

function obtenirBilanAnnee($date) {
	$var1 = obtenirBeneficeAnnee($date);
	$var2 = obtenirNbVenteAnnee($date);
	$var3 = obtenirNbStockAnnee($date);
	return $var1 . $var2 . $var3;
}


function obtenirBeneficeAnnee($date) {
	$SQL = "SELECT (SUM(v.Resale_price)-SUM(s.Retail_price))
			FROM Stock AS s
			JOIN Sales AS v
			ON s.Idshoes = v.Idshoes
			WHERE s.Resale_date>'$date' AND s.Retail_date>'$date'";
	return SQLGetChamp($SQL);
}

function obtenirNbVenteAnnee($date) {
	$SQL = "SELECT COUNT(*)
			FROM Sales
			WHERE Resale_date>'$date'";
	return SQLGetChamp($SQL);
}

function obtenirNbStockAnnee($date) {
	$SQL = "SELECT COUNT(*)
			FROM Stock
			WHERE Retail_date>'$date'";
	return SQLGetChamp($SQL);
}


?>
