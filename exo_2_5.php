<h1>
    Exo php 2.5
</h1>

<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en<br>
    précisant le nom des champs associés.
</p>

<h2>
    Résultat
</h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];
echo "<form>";
afficherInput($nomsInput);
echo "</form";

function afficherInput($nomsInput)
{
    foreach ($nomsInput as $nom) {
        echo "<label for='$nom'>$nom</label><br>";
        echo "<input type='text' name='$nom'><br>";
    }
}
