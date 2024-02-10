<?php
/*index.php 
Fichier permettant d'afficher les différentes vues contenues dans le repertoire "templates"
La vue à afficher est définie par le paramètre "view", inclus dans la chaîne de requête

N.B. Les formulaires de toutes les vues générées enverront leurs données vers la page controleur.php pour traitement. 
La page controleur.php redirigera alors vers la page index pour réafficher la vue pertinente, généralement la vue dans laquelle se trouvait le formulaire.
*/
session_start();

include_once "libs/maLibUtils.php"; //Fonction valider()


// NB : il faut que view soit défini avant d'appeler l'entête

$view = valider("view"); // Récupération du paramètre view

//Cas par défaut(vide) 
if(!$view) $view=""; ////////////A CHANGER\\\\\\\\\\\\\\\


//Toute personne non connectée est redirigée vers la page de login
// + message
if(!valider("connecte","SESSION")){
    $view = ""; //           ////////////A CHANGER C'EST LA VUE DE BASE\\\\\\\\\\\\\\\
    //Création d'un message
    //$_REQUEST["msg"]= "Il faut vous connecter";
}


//Inclusion du header "header.php" seulement pour les templates nécesssaires
include("templates/header.php");
include("templates/connexion.php");
include("templates/barre.php");

switch($view){
    //METTRE LES DIFFERENTS CAS


    //CAS PAR DEFAUT    
    default : // si le template correspondant à l'argument existe, on l'affiche
		// TODO : sinon on doit afficher une page par défaut 
			/**if (file_exists("templates/$view.php"))
				include("templates/$view.php");
            else{
                include("templates/CHANGERRRRRRRRRRRRRRRR.php");  ////////////A CHANGER \\\\\\\\\\\\\\\
            }*/
}

?>
