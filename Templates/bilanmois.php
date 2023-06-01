<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="page1.css" />
</head>
<body style="background: repeating-radial-gradient(circle at 150%,white 20%, #181A72,#181A72);">
<div>
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
</div>
<div id="droiteb">

<div id="affichage_stock">
<h1 class="titre">Bilan Mensuel</h1>
<header style="text-align:center">
  <a href="index.php?view=bilan" style="text-decoration:none" class="bulle">Bilan Global</a>
  <a href="index.php?view=bilanannee" style="text-decoration:none" class="bulle">Bilan Annuel</a>
</header>
<?php
  $date = getdate();
  if($date["mon"]==1) {
    $datem= $date["year"] . "-" . 12 . "-" . $date["mday"];
  }
  else {
    $datem= $date["year"] . "-" . ($date["mon"]-1) . "-" . $date["mday"];
  }
  $bilanm=obtenirBilanSpec($datem);
?>
<div id="circle1">
  <table>
    <tr>
      <th>Bénéfice</th>
    </tr>
    <tr>
      <td><?php echo $bilanm[0] ?></td>
    </tr>
  </table>
</div>
<div id="circle2">
  <table>
    <tr>
      <th>Nb Ventes</th>
    </tr>
    <tr>
      <td><?php echo $bilanm[1] ?></td>
    </tr>
  </table>
</div>
<div id="circle3">
  <table>
    <tr>
      <th>Nb Achats</th>
    </tr>
    <tr>
      <td><?php echo $bilanm[2] ?></td>
    </tr>
  </table>
</div>
</div>
<script>
      
      function createBubble() {
          const section = 
                document.getElementById('droiteb');
          const createElement = 
                document.createElement("span");
          var size = Math.random() * 60;

          createElement.style.animation = 
            "animation 6s linear infinite";
          createElement.style.width = 180 + size + "px";
          createElement.style.height = 180 + size + "px";
          createElement.style.left = 
            Math.random() * innerWidth + "px";
          section.appendChild(createElement);

          setTimeout(() => {
              createElement.remove();
          }, 1200);
      }
      setInterval(createBubble, 1000);

  </script>
</body>

</html>