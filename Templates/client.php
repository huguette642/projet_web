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
$clients = obtenirClient();

foreach($clients as $nextclient) {
  echo '<div class="unclient">';
    echo '<img class=" imgc" src="./img_paires/image">';
    echo '<div class="centre">';
    echo '<p class="inline">' . $nextclient["Name"] . '</p>';
    
    echo '<p class="inline milieu">Frais acheteur : ' . $nextclient["Buyer_expense"] . '%</p>';
    echo '<p class="inline milieu2">Frias vendeur : ' . $nextclient["Seller_expense"] . '%</p>';
  echo '</div>';
  echo '<a href="' . $nextclient["Link"] . '" class="inline droite">Lien du site : ' . $nextclient["Link"] . '</a>';
  echo '</div>';
  echo '<br>';
}
?>


</div>
</body>

</html>