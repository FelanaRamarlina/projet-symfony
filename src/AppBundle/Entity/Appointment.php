<?php

namespace AppBundle\Entity;

/**
 * Appointment
 */
class Appointment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $day;

    /**
     * @var \DateTime
     */
    private $hour;

    /**
     * @var bool
     */
    private $isValidated;


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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="appointment")
     */
    private $idAdvisor;

    /**
     * Set day
     *
     * @param \DateTime $day
     *
     * @return Appointment
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return \DateTime
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set hour
     *
     * @param \DateTime $hour
     *
     * @return Appointment
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return \DateTime
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set isValidated
     *
     * @param boolean $isValidated
     *
     * @return Appointment
     */
    public function setIsValidated($isValidated)
    {
        $this->isValidated = $isValidated;

        return $this;
    }

    /**
     * Get isValidated
     *
     * @return bool
     */
    public function getIsValidated()
    {
        return $this->isValidated;
    }
}

