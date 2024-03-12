<?php
/*
classe Auteur
    - Attributs : nom, prenom, livres
    - Methodes : getNom(), setNom(), getPrenom(), setPrenom(), afficherBibliographie(), getLivres(), addLivre()
    - constructeur : __construct(string $nom, string $prenom)
    - Accesseurs : getNom(), setNom(), getPrenom(), setPrenom()
    - Mutateurs : setNom(string $nom), setPrenom(string $prenom)
    - Fonctions : afficherBibliographie(), getLivres(), addLivre()
*/
class Auteur
{
    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
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
        $result = "<div style='text-align: justify;margin: 0 auto; width: 40%;'>";
        $result .= "<h2>Livres de " . $this->nom . " " . $this->prenom . "</h2>";

        foreach ($this->livres as $livre) {
            $result .= $livre->getTitre()
                . " (" . $livre->getDateParution() . ")"
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

    public function addLivre(Livre $livre)
    {
        array_push($this->livres, $livre);
    }

    public function __toString()
    {
        return $this->afficherBibliographie();
    }
}
