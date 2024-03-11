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

//Création des titulaires et comptes
$titulaire1 = new Titulaire("Paul", "Dena", new DateTime("1999-03-18"), "Strasbourg");
$compte1 = new Compte("Compte courant", 1000, "€", $titulaire1);
$compte2= new Compte( "Livret A", 50000, "€", $titulaire1);

$titulaire2 = new Titulaire("Lemmy", "Killmister", new DateTime("1980-11-05"), "Paris");
$compte3 = new Compte("Compte courant", 3600, "€", $titulaire2);
$compte4= new Compte( "PEL", 1000000, "€", $titulaire2);

// Affichage des informations des titulaires
echo "Titulaire1 : ". $titulaire1-> AfficheInfos() . "<br/>";
echo "Titulaire2 : ". $titulaire2-> AfficheInfos() . "<br/>";

// Affichage des informations des comptes
echo "Compte 1 : <br/>".  $compte1-> AfficheInfos();
echo "Compte 4 : <br/>".  $compte4-> AfficheInfos();

// Envoi de fonds vers un compte
$compte1->envoyer($compte3, 500);

//crédit un compte
$compte3->crediter(125);

//débit un compte
$compte1->debiter(100);



