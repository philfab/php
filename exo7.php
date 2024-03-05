<h1>
    Exo php 7
</h1>

<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
    Poussin : entre 6 et 7 ans<br>
    Pupille : entre 8 et 9 ans<br>
    Minime : entre 10 et 11 ans<br>
    Cadet : à partir de 12 ans<br>
    Si la catégorie n’est pas gérée, merci de le préciser.<br>
</p>

<h2>
    Résultat
</h2>

<?php

$age_kid = 10;
$categorie = getCategory($age_kid);

echo "L'enfant de $age_kid ans est dans la catégorie : $categorie";
function getCategory($age)
{
    switch ($age) {
        case ($age >= 6 && $age <= 7):
            return "Poussin";
        case ($age >= 8 && $age <= 9):
            return "Pupille";
        case ($age >= 10 && $age <= 11):
            return "Minime";
        case ($age >= 12 && $age <= 17): // au dessus de 17 c junior
            return "Cadet";
        default:
            return "L'enfant de rentre dans aucune catégorie !";
    }
}
