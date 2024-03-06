<h1>
    Exo php 2.1
</h1>

<p>
    Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de<br>
    caractère passée en argument en majuscules et en rouge
</p>

<h2>
    Résultat
</h2>

<?php

$texte = "Mon texte en paramètre";
echo convertirMajRouge($texte);
function convertirMajRouge($texte)
{
    return "<p style='color: red;'>" . mb_strtoupper($texte) . "</p>";
}
