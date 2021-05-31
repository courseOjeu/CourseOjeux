<?php

require_once('class.Sujet.php');

class Forum implements JsonSerializable
{
    private $id_forum = 0;
    private $titre_forum = null;
    private $description_forum = null;

    private $lesSujets = array();

    /**
     * Forum constructor.
     * @param int $id_forum
     * @param null $titre_forum
     * @param null $description_forum
     */
    public function __construct(int $id_forum, $titre_forum, $description_forum)
    {
        $this->id_forum = $id_forum;
        $this->titre_forum = $titre_forum;
        $this->description_forum = $description_forum;
    }

    /**
     * @return int
     */
    public function getIdForum(): int
    {
        return $this->id_forum;
    }

    /**
     * @param int $id_forum
     */
    public function setIdForum(int $id_forum)
    {
        $this->id_forum = $id_forum;
    }

    /**
     * @return null
     */
    public function getTitreForum()
    {
        return $this->titre_forum;
    }

    /**
     * @param null $titre_forum
     */
    public function setTitreForum($titre_forum)
    {
        $this->titre_forum = $titre_forum;
    }

    /**
     * @return null
     */
    public function getDescriptionForum()
    {
        return $this->description_forum;
    }

    /**
     * @param null $description_forum
     */
    public function setDescriptionForum($description_forum)
    {
        $this->description_forum = $description_forum;
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


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }
}