<h1>
    Exo php 12
</h1>

<p>
    A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), <br> dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<h2>
    Résultat
</h2>

<?php

$personnes = array(
    array(
        "prenom" => "Mickaël",
        "pays" => "FRA"
    ),
    array(
        "prenom" => "Virgile",
        "pays" => "ESP"
    ),
    array(
        "prenom" => "Marie-Claire",
        "pays" => "ENG"
    )
);

function triPrenoms($a, $b)
{
    return strcmp($a["prenom"], $b["prenom"]); //strcmp renvoie posisif, negatif ou 0 pour tri
}

usort($personnes, "triPrenoms"); //réorganise le tableau en fonction du retour de triPrenoms

foreach ($personnes as $personne) {
    switch ($personne["pays"]) {
        case "FRA":
            echo "Salut ";
            break;
        case "ESP":
            echo "Hola ";
            break;
        case "ENG":
            echo "Hello ";
            break;
    }
    echo $personne["prenom"] . "<br>";
}
