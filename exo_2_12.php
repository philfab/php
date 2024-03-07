<h1>
    Exo php 2.12
</h1>

<p>
    La fonction var_dump($variable) permet d’afficher les informations d’une variable.
</p>

<h2>
    Résultat
</h2>

<?php
$tableauValeurs = [true, "texte", 10, 25.369, array("valeur1", "valeur2")];

afficheValeurs($tableauValeurs);
function afficheValeurs($tableau)
{
    foreach ($tableau as $valeur) {
        switch (gettype($valeur)) {
            case "boolean":
                $valeur = $valeur ? "true" : "false";
                echo "bool(" . $valeur . ")<br>";
                break;
            case "string":
                echo getString($valeur) . "<br>";
                break;
            case "integer":
                echo "int(" . $valeur . ")<br>";
                break;
            case "float":
            case "double":
                echo "float(" . $valeur . ")<br>";
                break;
            case "array":
                $count = count($valeur);
                $arrayData = displayArray($count, $valeur);
                echo "array($count) { " . $arrayData . ' }' . "<br>";
                break;
        }
    }
}
function displayArray($count, $array)
{
    $chaine = "";
    for ($i = 0; $i < $count; $i++) {
        $chaine .= "[$i]=> " . getString($array[$i]) . " ";
    }
    return $chaine;
}
function getString($string)
{
    $count = strlen($string);
    return "string($count) \"$string\"";
}
?>