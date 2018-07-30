<?php

namespace MessagerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerie
 *
 * @ORM\Table(name="messagerie")
 * @ORM\Entity(repositoryClass="MessagerieBundle\Repository\MessagesRepository")
 */
class Messagerie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire", type="string", length=255)
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="text")
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="corps", type="text")
     */
    private $corps;

    /**
     * @var int
     *
     * @ORM\Column(name="readMessage", type="boolean", options={"default":false})
     */
    private $readMessage;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Messagerie
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set destinataire
     *
     * @param string $destinataire
     *
     * @return Messagerie
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Messagerie
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set corps
     *
     * @param string $corps
     *
     * @return Messagerie
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;

        return $this;
    }

    /**
     * Get corps
     *
     * @return string
     */
    public function getCorps()
    {
        return $this->corps;
    }
    /**
     * Set read
     *
     * @param boolean $readMessage
     *
     * @return Messagerie
     */
    public function setReadMessage($readMessage)
    {
        $this->readMessage = $readMessage;

        return $this;
    }

    /**
     * Get readMessage
     *
     * @return boolean
     */
    public function getReadMessage()
    {
        return $this->readMessage;
    }
}
