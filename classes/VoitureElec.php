<?php
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
       return parent::AfficheInfos() . " Autonomie : " . $this->autonomie . " km";
    }
}