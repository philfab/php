<h1>
    Exo php 2.10
</h1>

<p>
    En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire<br>
    complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-<br>
    mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :<br>
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement<br>
    de validation (submit)
</p>

<h2>
    Résultat
</h2>
<?php

$datas = ["nom", "prénom", "adresse", "e-mail", "ville", "sexe"];
$intitules = ["Developpeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

echo CreateForm($datas, $intitules);

function CreateForm($datas, $intitules){

    $result = "<form method='post'>";
    foreach ($datas as $value) {
        $result .= "<label for='$value'>$value</label><br>
                    <input type='text' name='$value'><br>";
    }

    $result .= "<br><select name=\"intitule\">";

    foreach ($intitules as $value)
    $result .= "<option value='$value'>$value</option>";

    return $result .= "</select><br><br><input type='submit' value='Envoyer'></form>";
}