<h1>
    Exo php 11
</h1>

<p>
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le <br> contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.
</p>

<h2>
    Résultat
</h2>

<?php
$tabMarques = array("Peugeot", "Renault", "BMW", "Mercedes");
$nMarques = count($tabMarques);

echo "Il y a $nMarques marques de voitures dans le tableau : <br><ul>";

foreach ($tabMarques as $marque) {;
    echo "<li>$marque</li>";
}

echo "</ul>";
