<h1>
    Exo php 4
</h1>

<p>
    La phrase « Engage le jeu que je le gagne »<br>
    Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2>
    Résultat
</h2>

<?php

$phrase = "Engage le jeu que je le gagne";

if (palindrome($phrase)) {
    echo "La phrase \"$phrase\" est un palindrome.";
} else {
    echo "La phrase \"$phrase\" n'est pas un palindrome.";
}

function palindrome($phrase)
{
    //faut supprimer les caractères speciaux (^ = n'est pas inclus) + lowercase
    $phrase = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $phrase));
    $inverse = strrev($phrase); //inverse la phrase
    return ($phrase == $inverse);
}
