<?php
/*
 Classe VoitureElec 
-- Classe enfant de Voiture
 - Attributs : autonomie
 - Methodes : AfficheInfos()
 - Constructeur : __construct(string $marque, string $modele, int $autonomie, int $nbPortes = 5)
 - Accesseurs : getAutonomie(), setAutonomie(int $autonomie)
 - Mutateurs : setAutonomie(int $autonomie)
*/
class VoitureElec extends Voiture
{
    private int $autonomie;

    public function __construct(string $marque, string $modele, int $autonomie, int $nbPortes = 5,)
    {
        parent::__construct($marque, $modele, $nbPortes);
        $this->autonomie = $autonomie;
    }
    
    public function getAutonomie(): int
    {
        return $this->autonomie;
    }

    public function setAutonomie(int $autonomie)
    {
        $this->autonomie = $autonomie;
    }

    public function AfficheInfos(){
       return parent::AfficheInfos() . " Son autonomie est de : " . $this->autonomie . " km";
    }
}