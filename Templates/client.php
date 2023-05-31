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

<div id="affichage_clients">
<h1 class="titre">Clients</h1>
<?php
  $client = obtenirClient();
  echo '<div class="conteneurclient">';
  foreach($client as $nextclient){
    echo '<div class="sec2">';
    echo '<div class="div1">';
    echo '</div>';
    echo '<div class="div2">';
    echo '<p>Nom : ' . $nextclient["Name"] . '</p>';
    echo '<p>Frais acheteur : ' . $nextclient["Buyer_expense"] .  '</p>';
    echo '<p>Frais vendeur : ' . $nextclient["Seller_expense"] .  '</p>';
    echo '<a href="' . $nextclient["Link"] .  '">Lien boutique ' . $nextclient["Name"] . '</p>';
    echo '</div>';
    echo '</div>';
  }
  echo '</div>';
?>
</body>

</html>