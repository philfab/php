<h1>
    Exo php 5
</h1>

<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
    Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>
    Résultat
</h2>

<?php

$francs = 100;
$taux = 0.152449; //on peut aussi retrouver le taux avec une api , mais le franc est obsolète donc dur à trouver.

//round = arrondi (ici 2 décimales)
$euros =  round($francs * $taux, 2);


echo "La valeur de $francs francs est équivalente à environ $euros euros.";
?>