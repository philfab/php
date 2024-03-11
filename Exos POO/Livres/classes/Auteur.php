<?php
class Auteur{
    private string $nom;
    private string $prenom;
    private $livres = array();

    public function __construct(string $nom, string $prenom)
    {
       $this->nom = $nom;
       $this->prenom = $prenom;  
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

    public function afficherBibliographie()
    {
        $result= "<div style='text-align: justify;margin: 0 auto; width: 40%;'>";
        $result .= "<h2>Livres de " . $this->nom . " " . $this->prenom . "</h2>";

      foreach ($this->livres as $livre){
        $result.= $livre->getTitre() .  " (" 
                  . "(" . date_format($livre->getDateParution(), 'Y') . ")"
                  . " : " . $livre->getNbPages() . " pages"
                  . " / " . $livre->getPrix() . "€<br/>";      
      }

      $result .= "</div>";
      return $result;
    }
    
    public function getLivres()
    {
        return $this->livres;
    }

    public function setLivres($livres){
        $this->livres = $livres;
    }
}
