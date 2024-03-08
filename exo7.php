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
    switch (true) {
        case ($age >= 12 && $age <= 17):
            return "Cadet";
        case ($age >= 10):
            return "Minime";
        case ($age >= 8):
            return "Pupille";
        case ($age >= 6):
            return "Poussin";
        default:
            return "L'enfant ne rentre dans aucune catégorie !";
    }
}
