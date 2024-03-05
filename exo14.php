<h1>
    Exo php 14
</h1>

<p>
    Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>
    Résultat
</h2>

<?php

$dateNaissance = new DateTime('1985-01-17');
//$now = new DateTime('2018-05-21');
$now = new DateTime();

// ->diff(param DateTime) retourne un objet DateInterval retourné par la fonction diff de l'objet DateTime
// utilisable dans les deux sens ($now->...)
$diff = $dateNaissance->diff($now);

echo "Age de la personne" . $diff->format("%y ans %m mois %d jours");
