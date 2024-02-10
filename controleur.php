<?php
session_start();
    
    /*
    controleur.php est la source de tous les formulaires des vues du repertoire "templates"
    Gestion du paramètre "action" pour effectuer les traitements associés
    */

    //Inclusion des librairies 
    include_once "libs/maLibUtils.php";
	include_once "libs/maLibSQL.pdo.php";
	include_once "libs/maLibSecurisation.php"; 
	include_once "libs/modele.php"; 

    //Initialisation de la chaîne de requête (querysting)
    $qs = "";
    if($action=valider("action")){
        echo 
        ob_start (); // ob_start() démarre la temporisation de sortie. 
                    //Tant qu'elle est enclenchée, aucune donnée, hormis les en-têtes, n'est envoyée au navigateur, mais temporairement mise en tampon.
        
        echo "Action = '$action' <br />";    //Affichage en cas de pb


        
        switch($action)
        {
            //CAS A TRAITER
        }
    }
    $_SESSION["action"]=$action;
    // On redirige toujours vers la page index, mais on ne connait pas le répertoire de base
	// On l'extrait donc du chemin du script courant : $_SERVER["PHP_SELF"]
	// Par exemple, si $_SERVER["PHP_SELF"] vaut /chat/data.php, dirname($_SERVER["PHP_SELF"]) contient /chat

	$urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php";
	// On redirige vers la page index avec les bons arguments

	header("Location:" . $urlBase . $qs);

	// On écrit seulement après cette entête
	ob_end_flush();
?>