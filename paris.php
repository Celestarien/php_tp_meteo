<?php include "style.php" ?>
<?php

    $compteur = 0;
    while ($compteur <= 4) {
    $image ="https://www.prevision-meteo.ch/uploads/widget/paris_".$compteur.".png";
    echo "<img src=".$image.">";
    $compteur += 1;
}
?>