<?php

require_once('class.Utilisateur.php');
require_once('class.Sujet.php');

class Message implements JsonSerializable
{
    private $id_message = 0;
    private $texte_message = null;

    private $l_Utilisateur = array();
    private $leSujet = array();

    /**
     * Message constructor.
     * @param int $id_message
     * @param null $texte_message
     */
    public function __construct(int $id_message, $texte_message)
    {
        $this->id_message = $id_message;
        $this->texte_message = $texte_message;
    }

    /**
     * @return int
     */
    public function getIdMessage(): int
    {
        return $this->id_message;
    }

    /**
     * @param int $id_message
     */
    public function setIdMessage(int $id_message)
    {
        $this->id_message = $id_message;
    }

    /**
     * @return null
     */
    public function getTexteMessage()
    {
        return $this->texte_message;
    }

    /**
     * @param null $texte_message
     */
    public function setTexteMessage($texte_message)
    {
        $this->texte_message = $texte_message;
    }

    /**
     * @return array
     */
    public function getLUtilisateur(): array
    {
        return $this->l_Utilisateur;
    }

    /**
     * @param array $l_Utilisateur
     */
    public function setLUtilisateur(array $l_Utilisateur)
    {
        $this->l_Utilisateur = $l_Utilisateur;
    }

    /**
     * @return array
     */
    public function getLeSujet(): array
    {
        return $this->leSujet;
    }

    /**
     * @param array $leSujet
     */
    public function setLeSujet(array $leSujet)
    {
        $this->leSujet = $leSujet;
    }


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }
}

