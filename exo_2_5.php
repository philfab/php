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
echo afficherInput($nomsInput);

function afficherInput($nomsInput)
{
    $result="
    <form method='post' action='#'>";

    foreach ($nomsInput as $nom) {
        $result.= "
         <label for='$nom'>$nom</label><br>
         <input type='text' name='$nom' id='$nom'><br>";
    }

    return $result.="</form>";
}
