<?php
/*
classe Compte
    - Attributs : libelle, solde, devise, titulaire
    - Methodes : getLibelle(), setLibelle(), getSolde(), setSolde(), getDevise(), setDevise(), getTitulaire(), setTitulaire(), envoyer(), debiter(), AfficheInfos()
    - constructeur : __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire)
    - accesseurs : getLibelle(), setLibelle(), getSolde(), setSolde(), getDevise(), setDevise()
    - mutateurs : setLibelle(string $libelle), setSolde(float $solde), setDevise(string $devise)
*/
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
        $titulaire->addCompte($this);
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

    public function setSolde(float $montant)
    {
        $this->solde += $montant;
        $result = "Le nouveau solde du compte est de " . $this->solde . " " . $this->devise . "<br><br>";
        echo $result;
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

    public function envoyer(Compte $destCompte,float $montant)
    {
        echo "Le compte est crédité de " . $montant . " " . $this->devise ."<br>";
        $destCompte->setSolde($montant);
    }

    public function debiter (float $montant){
        echo "Le compte est débité de " . $montant . " " . $this->devise ."<br>";
        $this->setSolde(-$montant);
    }

    public function AfficheInfos()
    {
        return $this->libelle . " : solde " . $this->solde  . $this->devise. " - Titulaire : " 
        . $this->titulaire->getNom() . " " . $this->titulaire->getPrenom() . "<br><br>";
    }



}
