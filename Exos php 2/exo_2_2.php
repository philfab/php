<h1>
    Exo php 2.2
</h1>

<p>
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays <br>
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à<br>
    une fonction personnalisée
</p>

<h2>
    Résultat
</h2>

<?php

$capitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome"];
ksort($capitales); //tri ascendant par rapport à la valeur (ksort = rapport à la clef)
echo afficherTableHTML($capitales);

function afficherTableHTML(array $capitales)
{
    $result="
    <table border=1>
    <thead>
    <tr>
      <th>Pays</td>
      <th>Capitales</td>
    </tr>
    </thead>
    <tbody>";
    foreach ($capitales as $pays => $ville) {
        $result.= "
        <tr>
         <td>" . mb_strtoupper($pays) . "</td>
         <td>$ville</td>
        </tr>";
    }
    $result .= "</tbody></table>";
    return $result;
}