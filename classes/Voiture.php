<?php
/*
 Classe Voiture 
 - Attributs : marque, modele, nbPortes, vitesseActuelle
 - Methodes : Demarrer(), Accelerer(), Stopper(), AfficheInfos(), AfficheVitesse()
 - Constructeur : __construct(string $marque, string $modele, int $nbPortes)
 - Accesseurs : getMarque(), getModele(), getNbPortes(), getVitesseActuelle()
 - Mutateurs : setMarque(string $marque), setModele(string $modele), setNbPortes(int $nbPortes)
*/
class Voiture {
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;

    public function __construct(string $marque, string $modele, int $nbPortes = 5){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
    }

    public function getMarque() : string{
        return $this->marque;
    }

    public function getModele() : string{
        return $this->modele;
    }

    public function getNbPortes() : int{
        return $this->nbPortes;
    }

    public function setMarque(string $marque){
        $this->marque = $marque;
    }

    public function setModele(string $modele){
        $this->modele = $modele;
    }

    public function setNbPortes(int $nbPortes){
        $this->nbPortes = $nbPortes;
    }

    public function getVitesseActuelle() : int{
        return $this->vitesseActuelle;
    }

    public function Demarrer(){
        if ($this->vitesseActuelle == 0) 
        {
            $this->vitesseActuelle = 10;
            echo "Le vehicule {$this->marque} {$this->modele} démarre<br>";
        }
            
        else
            echo "Le vehicule {$this->marque} {$this->modele} a deja demarré<br>";
    }

    public function Accelerer(int $vitesse){
        if ($this->vitesseActuelle == 0){
            echo "Le véhicule {$this->marque} {$this->modele} veut accélérer de $vitesse km/h<br>";
            echo "Pour accélérer, il faut démarrer le vehicule {$this->marque} {$this->modele} !<br>";
        }
        else
        {
            $this->vitesseActuelle += $vitesse;
            echo "Le vehicule {$this->marque} {$this->modele} accélére de $vitesse km/h<br>";
        }
           
    }

    public function Stopper(){
        $this->vitesseActuelle = 0;
        echo "Le vehicule {$this->marque} {$this->modele} est stoppé<br>";

    }

    public function Ralentir(int $vitesse){
        
    }

    public function AfficheVitesse(){
        echo "La vitesse du vehicule {$this->marque} {$this->modele} est de : {$this->vitesseActuelle} km/h <br>";
    }

    public function AfficheInfos(){
        $etat = $this->vitesseActuelle > 0 ? "est démarré" : "est à l'arrêt";
        echo "<br>
        Nom et modèle du vehicule : {$this->marque} {$this->modele}<br>
        Nombre de portes : {$this->nbPortes}<br>
        Le véhicule $this->marque $etat <br>
        Sa vitesse actuelle est de : {$this->vitesseActuelle} km/h<br>";
    }

}