<?php
session_start();

  include_once "libs/maLibUtils.php";
  include_once "libs/maLibSQL.pdo.php";
  include_once "libs/modele.php"; 
  
  // On réutilise la query string pour la renvoyer à la prochaine page
  // Le tableau $qs peut être complété pour être renvoyé à la page de destination
  $qs = $_GET;
  // On peut aussi définir une query_string sous forme de chaîne de caractères
  //$qs = "";

  if ($action = valider("action"))
  {
    ob_start ();
    echo "Action = '$action' <br />";
    // ATTENTION : le codage des caractères peut poser PB si on utilise des actions comportant des accents... 
    // A EVITER si on ne maitrise pas ce type de problématiques
    
    // Un paramètre action a été soumis, on fait le boulot...
    switch($action)
    {
      // TODO
      case 'ajout_paire':
        if($nom_paire = valider("nom_paire"))
        if($taille = valider("taille"))
        if($retail_price = valider("retail_price"))
        if($retail_date = valider("retail_date"))
        {
          $image = isset($_FILES['image']) ? $_FILES['image'] : null;
          if(isset($image)) {
            $image_extension = pathinfo($image['name'],PATHINFO_EXTENSION);
            $image_name=obtenirNbStock()+1 . "." . $image_extension;
            $image_tmp_name = $image['tmp_name'];
            $image_destination_path="img_paires/" . $image_name;

            $allowed_files = ['png','jpg','jpeg','gif'];
            $extension = explode('.', $image_name);
            $extension = end($extension);
            if (in_array($extension, $allowed_files)) {
              move_uploaded_file($image_tmp_name, $image_destination_path);
            }
          }
          insertStock($nom_paire,$taille,$retail_price,$retail_date);
        }
        break;
      
      case 'modif_stock' :
        if($id = valider("idshoes"))
        if($taille = valider("taille"))
        if($retail_price = valider("retail_price"))
        if($retail_date = valider("retail_date"))
        {
          Modifstock($id,$taille,$retail_price,$retail_date);
        }
        break;

      case 'ajout_vente' : 
        if($id = valider("idshoes"))
        if($prix = valider("prix"))
        if($date = valider("date"))
        if($client = valider("client")) 
        {
          Vendre($id,$prix,$date,$client);
        }
        break;

      case 'supprimer_paire' : 
        if($id = valider("idshoes"))
        {
          SupprStock($id);
        }
        break;

      case 'ajout_client' : 
        if($nom = valider("nom_client"))
        if($fraisa = valider("fraisa"))
        if($fraisv = valider("fraisv"))
        if($lien = valider("lien"))
        {
          AjoutClient($nom,$fraisa,$fraisv,$lien);
        }
        break;

      case 'modif_client' :
        if($nom = valider("nom_client"))
        if($fraisa = valider("fraisa"))
        if($fraisv = valider("fraisv"))
        if($lien = valider("lien"))
        if($newnom = valider("newnom"))
        {
          ModifClient($nom,$newnom,$fraisv,$fraisa,$lien);
        }
        break;

      case 'suppr_client' :
        if($nom = valider("nom_client"))
        {
          SupprClient($nom);
        }
        break;

      case 'modif_vente' : 
        if($id = valider("idshoes"))
        if($prix = valider("prix"))
        if($date = valider("date"))
        if($client = valider("client"))
        {
          ModifVente($id,$prix,$date,$client);
        }
        break;

      case 'annul_vente' : 
        if($id = valider("idshoes"))
        {
          AnnulVente($id);
        }
        break;
    }
  }

  // On redirige toujours vers la page index, mais on ne connait pas le répertoire de base
  // On l'extrait donc du chemin du script courant : $_SERVER["PHP_SELF"]
  // Par exemple, si $_SERVER["PHP_SELF"] vaut /chat/data.php, dirname($_SERVER["PHP_SELF"]) contient /chat
  $urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php";

  // On redirige vers la page index avec les bons arguments
  rediriger($urlBase, $qs);

  // On écrit seulement après cette entête
  ob_end_flush();
  
?>
