<?php
/*
classe Livre
    - Attributs : titre, auteur, nbPages, prix, dateParution
    - Methodes : getTitre(), setTitre(), getAuteur(), setAuteur(), getNbPages(), setNbPages(), getPrix(), setPrix(), getDateParution(), setDateParution(), __toString()
    - Constructeur : __construct(string $titre, Auteur $auteur, int $nbPages, float $prix, DateTime $dateParution)
    - Accesseurs : getTitre(), setTitre(), getAuteur(), setAuteur(), getNbPages(), setNbPages(), getPrix(), setPrix(), getDateParution(), setDateParution()
    - Mutateurs : setTitre(string $titre), setAuteur(Auteur $auteur), setNbPages(int $nbPages), setPrix(float $prix), setDateParution(DateTime $dateParution)
    - Fonctions : __toString()
*/
class Livre
{
    private string $titre;
    private Auteur $auteur;
    private int $nbPages;
    private float $prix;
    private DateTime $dateParution;

    public function __construct(string $titre, Auteur $auteur, int $nbPages, float $prix, DateTime $dateParution)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $this->dateParution = $dateParution;
        $auteur->addLivre($this);
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
        $this->titre = $titre;
    }

    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;
    }

    public function getNbPages(): int
    {
        return $this->nbPages;
    }

    public function setNbPages(int $nbPages)
    {
        $this->nbPages = $nbPages;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix)
    {
        $this->prix = $prix;
    }

    public function getDateParution(): DateTime
    {
        return $this->dateParution;
    }

    public function setDateParution(DateTime $dateParution)
    {
        $this->dateParution = $dateParution;
    }

    public function __toString()
    {
        return "Titre : $this->titre, Auteur : $this->auteur, Nombre de pages : $this->nbPages, Prix : $this->prix, Date de parution : $this->dateParution";
    }
}