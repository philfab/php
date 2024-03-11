<?php

class Compte{

    private string $libelle;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function setSolde(float $solde)
    {
        $this->solde = $solde;
    }

    public function getDevise(): string
    {
        return $this->devise;
    }

    public function setDevise(string $devise)
    {
        $this->devise = $devise;
    }

    public function getTitulaire(): Titulaire
    {
        return $this->titulaire;
    }

    public function setTitulaire(Titulaire $titulaire)
    {
        $this->titulaire = $titulaire;
    }

    public function sendMoney(Compte $destCompte,float $montant)
    {
        echo "Un montant de " . $montant . " " . $this->devise . " est envoyé !" . PHP_EOL;
        $destCompte->setMoney($montant);
    }

    public function setMoney(float $montant)
    {
        $this->solde += $montant;

        $result = "<br>Le montant de " . $montant . " " . $this->devise . " a bien été transféré !" . PHP_EOL;
        $result .= "Le nouveau solde du compte est de " . $this->solde . " " . $this->devise . PHP_EOL;
        echo $result;
    }

    public function AfficheInfos()
    {
        return $this->libelle . " : " . $this->solde  . $this->devise. " - Titulaire : " 
        . $this->titulaire->getNom() . " " . $this->titulaire->getPrenom() . "<br>";
    }



}
