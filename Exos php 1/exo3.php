<h1>
    Exo php 3
</h1>

<p>
    A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » <br>
    par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>

<h2>
    Résultat
</h2>

<?php
$phrase = "Notre formation DL commence aujourd'hui";
$newphrase = str_replace("aujourd'hui", "demain", $phrase);
echo "Ancienne phrase : $phrase <br>";
echo "Nouvelle phrase : $newphrase";
?>