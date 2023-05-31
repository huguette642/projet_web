<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="page1.css" />
</head>
<body style="background: repeating-radial-gradient(circle at 150%,white 20%, #181A72,#181A72);">

<?php

if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
  header("Location:../index.php?view=stock");
  die("");
}

include_once("libs/modele.php"); // listes
include_once("libs/maLibUtils.php");// tprint
include_once("libs/maLibForms.php");// mkTable, mkLiens, mkSelect ...
?>

<div id="affichage_stock">
<h1 class="titre">Ventes</h1>
<?php
  $stock = obtenirVente();
  $nb=0;
  echo '<div class="conteneur">';
  foreach($stock as $nextstock){
    if($nb==4){
      echo '<br>';
      echo '</div>';
      echo '<div class="conteneur">';
      $nb=0;
    }
    echo '<div class="sec2">';
    echo '<div class="div1">';
    echo '<img class="img1" src="./interface_photo/10.1-Bilan_Mois.png">';
    echo '</div>';
    echo '<div class="div2">';
    echo '<p>Id chaussure : ' . $nextstock["Idshoes"] . '</p>';
    echo '<p>Nom : ' . $nextstock["Name"] . '</p>';
    echo '<p>Taille : ' . $nextstock["Size"] .  '</p>';
    echo '<p>Resale Price : ' . $nextstock["Resale_price"] .  '</p>';
    echo '<p>Resale Date : ' . $nextstock["Resale_date"] .  '</p>';
    echo '<p>Resale Time : ' . $nextstock["Resale_time"] .  '</p>';
    mkForm("controleur.php");
    mkInput('button','facture','','class=boutonvio');
    mkInput('button','modifier','','class=boutono');
    mkInput('button','supprimer','','class=boutonr');
    endForm();
    echo '</div>';
    echo '</div>';
    $nb+=1;
  }
  echo '</div>';
?>
</body>

</html>