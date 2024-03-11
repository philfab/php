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
    private string $_nom;
    private string  $_prenom;
    private DateTime $_dateNaissance;

    public function __construct(string $nom, string $prenom, string $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    private function CalculerAge(): int
    {
        return $this->_dateNaissance->diff(new DateTime())->y;
    }
    public function AfficheInfos(): string
    {
        $age = $this->CalculerAge();
        return $this->_prenom . ' ' . $this->_nom . " a " . $age . " ans";
    }

    //méthode spéciale en PHP appelée lorsqu'un objet est converti en chaîne de caractères
    public function __toString()
    {
        return $this->afficheInfos();
    }
    public function getNom(): string
    {
        return $this->_nom;
    }

    public function setNom(string $nom): void
    {
        $this->_nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->_prenom = $prenom;
    }

    public function getDateNaissance(): DateTime
    {
        return $this->_dateNaissance;
    }

    public function setDateNaissance(DateTime $dateNaissance): void
    {
        $this->_dateNaissance = $dateNaissance;
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1 . '<br>';
echo $p2;
