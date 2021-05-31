<?php

require_once('class.Utilisateur.php');


class Don implements JsonSerializable
{
    private $id_don = 0;
    private $prenom = null;
    private $email = null;
    private $adresse_postal = null;
    private $code_postal = 0;


    private $lesDonateurs = array();

    /**
     * Don constructor.
     * @param int $id_don
     * @param null $prenom
     * @param null $email
     * @param null $adresse_postal
     * @param int $code_postal
     */
    public function __construct(int $id_don, $prenom, $email, $adresse_postal, int $code_postal)
    {
        $this->id_don = $id_don;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->adresse_postal = $adresse_postal;
        $this->code_postal = $code_postal;
    }

    /**
     * @return int
     */
    public function getIdDon(): int
    {
        return $this->id_don;
    }

    /**
     * @param int $id_don
     */
    public function setIdDon(int $id_don)
    {
        $this->id_don = $id_don;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getAdressePostal()
    {
        return $this->adresse_postal;
    }

    /**
     * @param null $adresse_postal
     */
    public function setAdressePostal($adresse_postal)
    {
        $this->adresse_postal = $adresse_postal;
    }

    /**
     * @return int
     */
    public function getCodePostal(): int
    {
        return $this->code_postal;
    }

    /**
     * @param int $code_postal
     */
    public function setCodePostal(int $code_postal)
    {
        $this->code_postal = $code_postal;
    }

    /**
     * @return array
     */
    public function getLesDonateurs(): array
    {
        return $this->lesDonateurs;
    }

    /**
     * @param array $lesDonateurs
     */
    public function setLesDonateurs(array $lesDonateurs)
    {
        $this->lesDonateurs = $lesDonateurs;
    }


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }
}