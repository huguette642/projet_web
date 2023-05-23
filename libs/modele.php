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






?>
