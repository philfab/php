<h1>
    Exo php 2.11
</h1>

<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une<br>
    chaîne de caractère représentant une date.
</p>

<h2>
    Résultat
</h2>

<?php
echo ucwords(formaterDateFr("2018-02-23"));

function formaterDateFr($dateStr)
{
    $dateTimeObj = new DateTime($dateStr, new DateTimeZone('Europe/Paris'));
    return
        IntlDateFormatter::formatObject(
            $dateTimeObj,
            'eeee d MMMM y',
            'fr_FR'
        );
}
