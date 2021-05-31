<?php

require_once('class.Utilisateur.php');
require_once('class.Categorie.php');

class Jeu implements JsonSerializable
{
    private $id_jeu = 0;
    private $libelle = null;
    private $nom_de_jeu = null;
    private $image_jeu = null;
    private $datejeu = null;
    private $partage = false;
    private $lien_affiliation = null;


     private $lesUtilisateurs = array();
     private $lesCategories = array();

    /**
     * Jeu constructor.
     * @param int $id_jeu
     * @param null $libelle
     * @param null $nom_de_jeu
     * @param null $image_jeu
     * @param null $datejeu
     * @param bool $partage
     * @param null $lien_affiliation
     */
    public function __construct(int $id_jeu, $libelle, $nom_de_jeu, $image_jeu, $datejeu, bool $partage, $lien_affiliation)
    {
        $this->id_jeu = $id_jeu;
        $this->libelle = $libelle;
        $this->nom_de_jeu = $nom_de_jeu;
        $this->image_jeu = $image_jeu;
        $this->datejeu = $datejeu;
        $this->partage = $partage;
        $this->lien_affiliation = $lien_affiliation;
    }

    /**
     * @return int
     */
    public function getIdJeu(): int
    {
        return $this->id_jeu;
    }

    /**
     * @param int $id_jeu
     */
    public function setIdJeu(int $id_jeu)
    {
        $this->id_jeu = $id_jeu;
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
     * @return null
     */
    public function getNomDeJeu()
    {
        return $this->nom_de_jeu;
    }

    /**
     * @param null $nom_de_jeu
     */
    public function setNomDeJeu($nom_de_jeu)
    {
        $this->nom_de_jeu = $nom_de_jeu;
    }

    /**
     * @return null
     */
    public function getImageJeu()
    {
        return $this->image_jeu;
    }

    /**
     * @param null $image_jeu
     */
    public function setImageJeu($image_jeu)
    {
        $this->image_jeu = $image_jeu;
    }

    /**
     * @return null
     */
    public function getDatejeu()
    {
        return $this->datejeu;
    }

    /**
     * @param null $datejeu
     */
    public function setDatejeu($datejeu)
    {
        $this->datejeu = $datejeu;
    }

    /**
     * @return bool
     */
    public function isPartage(): bool
    {
        return $this->partage;
    }

    /**
     * @param bool $partage
     */
    public function setPartage(bool $partage)
    {
        $this->partage = $partage;
    }

    /**
     * @return null
     */
    public function getLienAffiliation()
    {
        return $this->lien_affiliation;
    }

    /**
     * @param null $lien_affiliation
     */
    public function setLienAffiliation($lien_affiliation)
    {
        $this->lien_affiliation = $lien_affiliation;
    }

    /**
     * @return array
     */
    public function getLesUtilisateurs(): array
    {
        return $this->lesUtilisateurs;
    }

    /**
     * @param array $lesUtilisateurs
     */
    public function setLesUtilisateurs(array $lesUtilisateurs)
    {
        $this->lesUtilisateurs = $lesUtilisateurs;
    }

    /**
     * @return array
     */
    public function getLesCategories(): array
    {
        return $this->lesCategories;
    }

    /**
     * @param array $lesCategories
     */
    public function setLesCategories(array $lesCategories)
    {
        $this->lesCategories = $lesCategories;
    }


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }
}
