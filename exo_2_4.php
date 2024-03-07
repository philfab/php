<h1>
    Exo php 2.4
</h1>

<p>
    A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra<br>
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un<br>
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale)
</p>

<h2>
    Résultat
</h2>

<?php
$capitales = [
    "France" => "Paris", "Allemagne" => "Berlin",
    "USA" => "Washington", "Italie" => "Rome", "Espagne" => "Madrid"
];

ksort($capitales); //tri ascendant par rapport à la valeur clef
echo '<table  border="1">';
echo afficherTableHTML($capitales);
echo "</table>";

function afficherTableHTML($capitales)
{
    echo "
    <tr>
      <th>Pays</td>
      <th>Capitale</td>
      <th>Lien wiki</td>
    </tr>
     ";
    foreach ($capitales as $pays => $ville) {
        $lienwiki = "https://fr.wikipedia.org/wiki/" . $ville;
        echo "
        <tr>
         <td>" . mb_strtoupper($pays) . "</td>
         <td>$ville</td>
         <td><a href='$lienwiki' target='_blank'>Lien</a></td>
        </tr>
        ";
    }
}
