<h1>
    Exo php 2.14
</h1>

<p>
Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec <br>
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>
</p>

<h2>
    Résultat
</h2>

<?php
include "classes/Voiture.php";
include "classes/VoitureElec.php";

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->afficheInfos();
echo $ve1->afficheInfos();