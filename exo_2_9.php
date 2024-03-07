<h1>
    Exo php 2.9
</h1>

<p>
    Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de<br>
    valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
</p>

<h2>
    Résultat
</h2>


<?php
$elements = ["Masculin" => false, "Féminin" => false, "Autre" => true];
afficherRadio($elements);
function afficherRadio($elements)
{
    foreach ($elements as $nom => $value) {
        $checked = $nom ? "checked" : null;
        echo "<input type='radio' name='civilite' value='$nom' $checked> $nom<br>";
    }
}
?>