<h1>
    Exo php 2.7
</h1>

<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser<br>
    dans le tableau associatif si la case est cochée ou non
</p>

<h2>
    Résultat
</h2>


<?php
$elements = ["Choix 1" => false, "Choix 2" => true, "Choix 3" => false];
echo genererCheckbox($elements);

function genererCheckbox($elements)
{
    $result="";
    foreach ($elements as $element => $value) {
        $checked = $value ? "checked" : "";
        $result.= "<input type='checkbox' name='$element' id='$element' $checked>$element<br>";
    }
    return $result;
}
