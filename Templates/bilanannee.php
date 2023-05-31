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
<h1 class="titre">Bilan Annuel</h1>
<header>
  <a href="index.php?view=bilan" style="text-decoration:none" class="bulle">Bilan Global</a>
  <a href="index.php?view=bilanmois" style="text-decoration:none" class="bulle">Bilan Mensuel</a>
</header>
<?php
  $date = getdate();
  $datea= ($date["year"]-1) . "-" . $date["mon"] . "-" . $date["mday"];
  $bilana=obtenirBilanSpec($datea);
?>
<div id="circle1">
  <table>
    <tr>
      <th>Bénéfice</th>
    </tr>
    <tr>
      <td><?php echo $bilana[0] ?></td>
    </tr>
  </table>
</div>
<div id="circle2">
  <table>
    <tr>
      <th>Nb Ventes</th>
    </tr>
    <tr>
      <td><?php echo $bilana[1] ?></td>
    </tr>
  </table>
</div>
<div id="circle3">
  <table>
    <tr>
      <th>Nb Stock</th>
    </tr>
    <tr>
      <td><?php echo $bilana[2] ?></td>
    </tr>
  </table>
</div>

</body>

</html>