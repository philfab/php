<h1>
    Exo php 2.13
</h1>

<p>
    Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et<br>
    vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus <br>
    des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule <br>
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un <br>
    véhicule.
</p>

<h2>
    Résultat
</h2>

<?php
require "classes\Voiture.php";

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

$v1->Demarrer();
$v1->Accelerer(50);
$v2->Demarrer();
$v2->stopper();
$v2->Accelerer(20);
$v1->ralentir(10);

$v1->AfficheVitesse();
$v2->AfficheVitesse();

$v1->AfficheInfos();
$v2->AfficheInfos();
