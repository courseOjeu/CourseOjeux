<?php
require_once('class.Jeu.php');

class Categorie implements JsonSerializable
{
    private $id_categorie = 0;
    private $titre_categorie = null;
    private $libelle = null;

    private $lesJeux = array();

    /**
     * Categorie constructor.
     * @param int $id_categorie
     * @param null $titre_categorie
     * @param null $libelle
     */
    public function __construct(int $id_categorie, $titre_categorie, $libelle)
    {
        $this->id_categorie = $id_categorie;
        $this->titre_categorie = $titre_categorie;
        $this->libelle = $libelle;
    }

    /**
     * @return int
     */
    public function getIdCategorie(): int
    {
        return $this->id_categorie;
    }

    /**
     * @param int $id_categorie
     */
    public function setIdCategorie(int $id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    /**
     * @return null
     */
    public function getTitreCategorie()
    {
        return $this->titre_categorie;
    }

    /**
     * @param null $titre_categorie
     */
    public function setTitreCategorie($titre_categorie)
    {
        $this->titre_categorie = $titre_categorie;
    }

    /**
     * @return null
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param null $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return array
     */
    public function getLesJeux(): array
    {
        return $this->lesJeux;
    }

    /**
     * @param array $lesJeux
     */
    public function setLesJeux(array $lesJeux)
    {
        $this->lesJeux = $lesJeux;
    }


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }
}