<h1>
    Exo Banque (POO)
</h1>

<p>
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires <br>
et leurs comptes bancaires respectifs
</p>

<h2>
    Résultat
</h2>

<?php
include "classes/Compte.php";
include "classes/Titulaire.php";

$titulaire1 = new Titulaire("Paul", "Dena", new DateTime("1999-03-18"), "Strasbourg");
$compte1 = new Compte("Compte courant", 1000, "€", $titulaire1);
$compte2= new Compte( "Livret A", 50000, "€", $titulaire1);
$titulaire1->addCompte($compte1);
$titulaire1->addCompte($compte2);


$titulaire2 = new Titulaire("Lemy", "Killmister", new DateTime("1980-11-05"), "Paris");
$compte3 = new Compte("Compte courant", 3600, "€", $titulaire2);
$compte4= new Compte( "PEL", 1000000, "€", $titulaire2);
$titulaire2->addCompte($compte3);
$titulaire2->addCompte($compte4);

echo "Titulaire1 : ". $titulaire1;
echo "<br/>";
echo "Titulaire2 : ". $titulaire2;
echo "<br/>";

echo "Compte 1 : <br/>".  $compte1;
echo "<br/>";
echo "Compte 4 : <br/>".  $compte4;

echo "<br/>";
echo $compte1->sendMoney($compte3, 500);

