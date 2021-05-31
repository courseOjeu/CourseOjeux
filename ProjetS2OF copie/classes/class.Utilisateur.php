<?php
    require_once('class.Don.php');
    require_once('class.Jeu.php');
    require_once('class.Sujet.php');
    require_once('class.Message.php');

class utilisateur implements JsonSerializable
{

    private $id_utilisateur = 0;
    private $prenom = null;
    private $identifiant = null;
    private $nom = null;
    private $mot_de_passe = null;
    private $adresse_mail = null;


    private $lesDons = array();
    private $lesJeux = array();
    private $lesSujets = array();
    private $lesMessages = array();

    /**
     * utilisateur constructor.
     * @param int $id_utilisateur
     * @param null $prenom
     * @param null $identifiant
     * @param null $nom
     * @param null $mot_de_passe
     * @param null $adresse_mail
     */
    public function __construct(int $id_utilisateur, $prenom, $identifiant, $nom, $mot_de_passe, $adresse_mail)
    {
        $this->id_utilisateur = $id_utilisateur;
        $this->prenom = $prenom;
        $this->identifiant = $identifiant;
        $this->nom = $nom;
        $this->mot_de_passe = $mot_de_passe;
        $this->adresse_mail = $adresse_mail;
    }

    /**
     * @return int
     */
    public function getIdUtilisateur(): int
    {
        return $this->id_utilisateur;
    }

    /**
     * @param int $id_utilisateur
     */
    public function setIdUtilisateur(int $id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;
    }

    /**
     * @return null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param null $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return null
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param null $identifiant
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param null $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return null
     */
    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    /**
     * @param null $mot_de_passe
     */
    public function setMotDePasse($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    /**
     * @return null
     */
    public function getAdresseMail()
    {
        return $this->adresse_mail;
    }

    /**
     * @param null $adresse_mail
     */
    public function setAdresseMail($adresse_mail)
    {
        $this->adresse_mail = $adresse_mail;
    }

    /**
     * @return array
     */
    public function getLesDons(): array
    {
        return $this->lesDons;
    }

    /**
     * @param array $lesDons
     */
    public function setLesDons(array $lesDons)
    {
        $this->lesDons = $lesDons;
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

    /**
     * @return array
     */
    public function getLesSujets(): array
    {
        return $this->lesSujets;
    }

    /**
     * @param array $lesSujets
     */
    public function setLesSujets(array $lesSujets)
    {
        $this->lesSujets = $lesSujets;
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


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);

    }
}
