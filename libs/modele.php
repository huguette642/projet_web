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
			FROM Stock
			WHERE Sale = 1";
	return ParcoursRs(SQLSelect($SQL));
}

function obtenirClient() {
	$SQL = "SELECT *
			FROM Customer
			ORDER BY Name";
	return parcoursRs(SQLSelect($SQL));
}

function obtenirBilanTotal() {
	$var1 = obtenirBeneficeTotal();
	$var2 = obtenirNbVente();
	$var3 = obtenirNbStock();
	return array($var1,$var2,$var3);
}
function obtenirBeneficeTotal() {
	$SQL = "SELECT (SUM(s.Resale_price)-SUM(s.Retail_price))
			FROM Stock AS s
			WHERE Resale_price != 0 AND Sale = 1";
	return SQLGetChamp($SQL);
}

function obtenirNbVente() {
	$SQL = "SELECT COUNT(*)
			FROM Stock
			WHERE Sale = 1";
	return SQLGetChamp($SQL);
}

function obtenirNbStock() {
	$SQL = "SELECT COUNT(*)
			FROM Stock";
	return SQLGetChamp($SQL);
}

function obtenirBilanSpec($date) {
	$var1 = obtenirBeneficeSpec($date);
	$var2 = obtenirNbVenteSpec($date);
	$var3 = obtenirNbStockSpec($date);
	return array($var1,$var2,$var3);
}


function obtenirBeneficeSpec($date) {
	$SQL = "SELECT (SUM(Resale_price)-SUM(s.Retail_price))
			FROM Stock AS s
			WHERE s.Resale_date>'$date' AND s.Retail_date>'$date' AND Resale_price != 0 AND Sale = 1";
	return SQLGetChamp($SQL);
}

function obtenirNbVenteSpec($date) {
	$SQL = "SELECT COUNT(*)
			FROM Stock
			WHERE Resale_date>'$date' AND Sale = 1";
	return SQLGetChamp($SQL);
}

function obtenirNbStockSpec($date) {
	$SQL = "SELECT COUNT(*)
			FROM Stock
			WHERE Retail_date>'$date'";
	return SQLGetChamp($SQL);
}

function insertStock($nom,$size,$prix,$date) {
	$SQL = "INSERT INTO Stock(Name,Size,Retail_price,Retail_date,Sale)
			VALUES('$nom','$size','$prix','$date',0)";
	return SQLInsert($SQL);
}

function Modifstock($id,$size,$retail_price,$retail_date) {
	$SQL = "UPDATE Stock
			SET Size='$size',
			Retail_price='$retail_price',
			Retail_date='$retail_date'
			WHERE Idshoes='$id'";
	return SQLUpdate($SQL);
}

function Vendre($id,$prix,$date,$client) {
	$SQL = "UPDATE Stock
			SET Resale_price='$prix',
			Resale_date='$date',
			Customer='$client',
			Sale=1
			WHERE Idshoes='$id'";
	return SQLUpdate($SQL);
}

function SupprStock($id) {
	$SQL = "DELETE FROM Stock
			WHERE Idshoes = $id";
	return SQLDelete($SQL);
}

function AjoutClient($nom,$fraisa,$fraisv,$lien){
	$SQL = "INSERT INTO Customer VALUES('$nom','$fraisv','$fraisa','$lien')";
	return SQLInsert($SQL);
}

function ModifClient($nom,$newnom,$fraisv,$fraisa,$lien){
	$SQL = "UPDATE Customer
			SET Name = \"'$newnom'\",
			Seller_expense = '$fraisv',
			Buyer_expense = '$fraisa',
			Link = \"'$lien'\"
			WHERE Name = \"'$nom'\"";
	return SQLUpdate($SQL);
}

function SupprClient($nom){
	$SQL = "DELETE FROM Customer
			WHERE Name = '$nom'";
	return SQLDelete($SQL);
}

function ModifVente($id,$prix,$date,$client){
	$SQL = "UPDATE Stock
			SET Resale_price = '$prix',
			Resale_date = '$date',
			Customer = '$client'
			WHERE Idshoes = '$id'";
	return SQLUpdate($SQL);
}

function AnnulVente($id){
	$SQL = "UPDATE Stock
			SET Sale = 0
			WHERE Idshoes = '$id'";
	return SQLUpdate($SQL);
}

?>
