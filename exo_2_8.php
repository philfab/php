<h1>
    Exo php 2.8
</h1>

<p>
    Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
    Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
</p>

<h2>
    Résultat
</h2>


<?php
$url = "http://my.mobirise.com/data/userpic/764.jpg";
echo repeterImage($url, 4);
function repeterImage($url, $nb)
{
    $result="";
    for ($i = 0; $i < $nb; $i++) {
        $result.= "<img src='$url' height='250px'>";
    }

    return $result;
}
