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

$personnes =
   [
    ["prenom" => "Mickaël", "pays" => "FRA"],
    ["prenom" => "Virgile","pays" => "ESP"],
    ["prenom" => "Marie-Claire","pays" => "ENG"]
   ];

$salutations = [
    'FRA' => "Salut ", 
    'ESP' => "Hola ", 
    'ENG' => "Hello "
];

function triPrenoms($a, $b)
{
    return strcmp($a["prenom"], $b["prenom"]); //strcmp renvoie posisif, negatif ou 0 pour tri (ordre lexicographique)
}

usort($personnes, "triPrenoms"); //réorganise le tableau en fonction du retour de triPrenoms

foreach ($personnes as $personne) {

    if(array_key_exists($personne["pays"], $salutations)) {
        echo $salutations[$personne["pays"]] . $personne["prenom"] . "<br>";
    } else 
        echo "La langue n'est pas supportée !";
    
}
