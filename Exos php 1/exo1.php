<h1>
    Exo php 1
</h1>

<p>
    Soit la phrase « Notre formation DL commence aujourd'hui ».<br>
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).
</p>

<h2>
    Résultat
</h2>

<?php
$phrase = "Notre formation DL commence aujourd'hui";

$cars = strlen($phrase);

echo "Le nombre de caractères dans la phrase est : $cars";
