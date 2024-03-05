<h1>
    Exo php 6
</h1>

<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir <br>
    de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2>
    Résultat
</h2>

<?php

$quantite = 5;
$prix_ht = 9.99;
$tva = 0.2;

$montant_total = Facture($quantite, $prix_ht, $tva);
echo "Le montant total de la facture est de : $montant_total euros.";

function Facture($quantite, $prix_ht, $tva)
{
    $montant_ht = $quantite * $prix_ht;
    $montant_tva = $montant_ht * $tva;
    $montant_total = $montant_ht + $montant_tva;

    return $montant_total;
}
