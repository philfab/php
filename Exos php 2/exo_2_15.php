<h1>
    Exo php 2.15
</h1>

<p>
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une <br>
adresse e-mail a le bon format.
</p>

<h2>
    Résultat
</h2>

<?php

$mail = "elan@elan-formation.fr";
echo CheckEmail($mail);
function CheckEmail($mail){
    // filter_var avec le filtre de validation FILTER_VALIDATE_EMAIL permet de valider une adresse e-mail et 
    //de renvoyer l'adresse e-mail valide ou False.
    return filter_var($mail, FILTER_VALIDATE_EMAIL) ? 
    "L'adresse $mail est une adresse e-mail valide" : 
    "L'adresse $mail n'est pas une adresse e-mail valide";
}