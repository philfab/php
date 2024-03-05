<h1>
    Exo php 15
</h1>

<p>
    Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
</p>

<h2>
    Résultat
</h2>

<?php

class Personne
{
    public $nom;
    public $prenom;
    public $dateNaissance;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($age);
    }

    private function CalculerAge()
    {
        return $this->dateNaissance->diff(new DateTime());
    }
    public function AfficheInfos()
    {
        $age = $this->CalculerAge()->y;
        echo $this->prenom . ' ' . $this->nom . " a " . $age . " ans<br>";
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->AfficheInfos();
echo $p2->AfficheInfos();
