<?php

class Titulaire{
        private string $nom;
        private string $prenom;
        private DateTime $dateNaissance;
        private string $ville;
        private array $comptes;

   public function __construct(string $nom, string $prenom, DateTime $dateNaissance, string $ville){
        $this ->nom = $nom;
        $this ->prenom = $prenom;
        $this ->dateNaissance = $dateNaissance;
        $this ->ville = $ville;
        $this->comptes = [];
   }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille(string $ville)
    {
        $this->ville = $ville;
    }

    public function getComptes(): array
    {
        return $this->comptes;
    }

    public function addCompte(Compte $compte)
    {
        array_push($this->comptes, $compte);
    }

    public function __toString()
    {
        $now = new DateTime();
        $diff = $this->dateNaissance->diff($now);
        $result = $this->nom . " " . $this->prenom . ", né à " . $this->ville . " âgé de " . $diff->format("%y ans") . "<br>";
        $result .= "Comptes du titulaire : <br>";
        foreach ($this->comptes as $compte) {
            $result .= $compte->getLibelle() . " : " . $compte->getSolde() . $compte->getDevise() . " - Titulaire : " . $this->nom . " " . $this->prenom . "<br>";
        }
    
        return $result;
    }
}
