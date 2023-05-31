<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="page1.css" />
</head>
<body>

<?php

if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
  header("Location:../index.php?view=stock");
  die("");
}

include_once("libs/modele.php"); // listes
include_once("libs/maLibUtils.php");// tprint
include_once("libs/maLibForms.php");// mkTable, mkLiens, mkSelect ...

  echo '<div id="affichage_stock">';
  echo '<h1>stock</h1>';
  $stock = obtenirStock();
  echo '<div class="conteneur">';
  foreach($stock as $nextstock){
    echo '<div class="sec2">';
    echo '<div class="div1">';
    echo '<img class="img1" src="../interface_photo/10.1-Bilan_Mois.png">';
    echo '</div>';
    echo '<div class="div2">';
    echo '<p>Nom : ' . $nextstock["Name"] . '</p>';
    echo '<p>Taille : ' . $nextstock["Size"] .  '</p>';
    echo '<p>Retail Price : ' . $nextstock["Retail_price"] .  '</p>';
    echo '<p>Retail Date : ' . $nextstock["Retail_date"] .  '</p>';
    echo '</div>';
    echo '</div>';
  }
  echo '</div>';
?>
</body>

</html>