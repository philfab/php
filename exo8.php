<h1>
    Exo php 8
</h1>

<p>
    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre
</p>

<h2>
    Résultat
</h2>

<?php

multiplicationTable(8);
echo "<br>";
multiplicationTable2(8);

function multiplicationTable($nombre)
{
    echo "Table de $nombre :<br>";
    for ($x = 1; $x <= 10; $x++) {
        $resultat = $nombre * $x;
        echo "$x x $nombre = $resultat<br>";
    }
}

function multiplicationTable2($nombre)
{
    echo "Table de $nombre :<br>";
    $x = 1;
    while ($x <= 10) {
        $resultat = $nombre * $x;
        echo "$x x $nombre = $resultat<br>";
        $x++;
    }
}
