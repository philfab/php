<h1>
    Exo php 2.6
</h1>

<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en<br>
    précisant le nom des champs associés.
</p>

<h2>
    Résultat
</h2>


<?php
$elements = ["Monsieur", "Madame", "Mademoiselle"];
echo "<select>";
alimenterListeDeroulante($elements);
echo "</select>";;
function alimenterListeDeroulante($elements)
{
    foreach ($elements as $element) {
        echo "<option>$element</option>";
    }
}
