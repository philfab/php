<h1>
    Exo Livres (POO)
</h1>

<p>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie 
complète d’un auteur.
</p>

<h2>
    Résultat
</h2>

<?php

require "classes/Auteur.php";
require "classes/Livre.php";

// Création d'un auteur
$auteur = new Auteur("Stephen","King");

// Création de livres
$l1= new Livre("Ca",$auteur,1138,20, new DateTime("1986-01-01"));
$l2= new Livre("Simetierre",$auteur,374,15, new DateTime("1983-01-01"));
$l3= new Livre("Le Fléau",$auteur,823,14, new DateTime("1978-01-01"));
$l4= new Livre("Shining",$auteur,447,16, new DateTime("1977-01-01"));
  
// Affichage de la bibliographie
echo $auteur->afficherBibliographie();