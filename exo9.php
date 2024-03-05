<h1>
    Exo php 9
</h1>

<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, <br>
    alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>
    Résultat
</h2>

<?php

$sexe = 'F';
$age = 32;

echo "Age : $age<br>";
echo "Sexe : $sexe<br>";

$estImposable = imposable($age, $sexe);

if ($estImposable)
    echo "La personne est imposable.";
else
    echo "La personne n'est pas imposable.";

function imposable($age, $sexe)
{
    if ($sexe === 'F' && $age >= 18 && $age <= 35) {
        return true;
    } elseif ($sexe === 'M' && $age > 20) {
        return true;
    } else {
        return false;
    }
}
