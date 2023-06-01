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
<h1 class="titre">Explication de la base SQL</h1>

<p style="text-align: center; color: white">Le but étant de copier la structure de la base dans sa propre base SQL.</p>

<textarea class="test2">
<?php       
            $ressource = fopen('bdd.sql', 'rb');
            echo fread($ressource, filesize('bdd.sql'));
        ?></textarea>
     

</body>

</html>