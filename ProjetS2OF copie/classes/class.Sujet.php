<?php

require_once('class.Message.php');
require_once('class.Utilisateur.php');
require_once('class.Forum.php');


class Sujet implements JsonSerializable
{
    private $id_sujet = 0;
    private $titre_sujet = null;
    private $description_sujet = null;

    private $lesMessages = array();
    private $lesUtilisateurs = array();
    private $leForum = null;

    /**
     * Sujet constructor.
     * @param int $id_sujet
     * @param null $titre_sujet
     * @param null $description_sujet
     */
    public function __construct(int $id_sujet, $titre_sujet, $description_sujet)
    {
        $this->id_sujet = $id_sujet;
        $this->titre_sujet = $titre_sujet;
        $this->description_sujet = $description_sujet;
    }

    /**
     * @return int
     */
    public function getIdSujet(): int
    {
        return $this->id_sujet;
    }

    /**
     * @param int $id_sujet
     */
    public function setIdSujet(int $id_sujet)
    {
        $this->id_sujet = $id_sujet;
    }

    /**
     * @return null
     */
    public function getTitreSujet()
    {
        return $this->titre_sujet;
    }

    /**
     * @param null $titre_sujet
     */
    public function setTitreSujet($titre_sujet)
    {
        $this->titre_sujet = $titre_sujet;
    }

    /**
     * @return null
     */
    public function getDescriptionSujet()
    {
        return $this->description_sujet;
    }

    /**
     * @param null $description_sujet
     */
    public function setDescriptionSujet($description_sujet)
    {
        $this->description_sujet = $description_sujet;
    }

    /**
     * @return array
     */
    public function getLesMessages(): array
    {
        return $this->lesMessages;
    }

    /**
     * @param array $lesMessages
     */
    public function setLesMessages(array $lesMessages)
    {
        $this->lesMessages = $lesMessages;
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
     * @return null
     */
    public function getLeForum()
    {
        return $this->leForum;
    }

    /**
     * @param null $leForum
     */
    public function setLeForum($leForum)
    {
        $this->leForum = $leForum;
    }


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);

    }
}