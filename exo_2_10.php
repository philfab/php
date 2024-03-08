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

<style>
    p {
        margin: 0;
    }
</style>
<?php

$datas = ["nom", "prénom", "adresse", "e-mail", "ville"];
$intitules = ["Developpeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
$genres = ["Homme", "Femme", "Autre"];

echo CreateForm($datas, $intitules, $genres);

function CreateForm($datas, $intitules, $genres)
{
    $result = "<form method='post'>";
    $result .= DisplayDatas($datas);
    $result .= DisplayGenres($genres);
    $result .= DisplayIntitules($intitules);
    $result .= "<br><input type='submit' value='Envoyer'></form>";

    return $result;
}

function DisplayDatas($datas)
{
    $result = "";

    foreach ($datas as $value)
        $result .= "
       <label for='$value'>$value</label><br>
       <input type='text' name='$value'><br>";

    return $result;
}

function DisplayIntitules($intitules)
{
    $result = "<br><p>Formation :</p>";
    $result .= "<select name=\"intitule\">";

    foreach ($intitules as $value)
        $result .= "<option value='$value'>$value</option>";

    $result .= "</select><br>";
    return $result;
}

function DisplayGenres($genres)
{
    $result = "<br><p>Genre :</p>";
    $result .= "<select name=\"genre\">";

    foreach ($genres as $value)
        $result .= "<option value='$value'>$value</option>";

    $result .= "</select><br>";
    return $result;
}
