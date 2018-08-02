<?php

namespace CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appointment
 *
 * @ORM\Table(name="appointment")
 * @ORM\Entity(repositoryClass="CalendarBundle\Repository\AppointmentRepository")
 */
class Appointment
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
     * @var \DateTime
     *
     * @ORM\Column(name="day", type="date")
     */
    private $day;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hour", type="time")
     */
    private $hour;

    /**
     * @var bool
     *
     * @ORM\Column(name="isValidated", type="boolean")
     */
    private $isValidated;

    /**
     * @ORM\ManyToOne(targetEntity="TypeAppointment", inversedBy="appointment")
     */
    private $typeAppointment;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="appointment")
     */
    private $candidat;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="appointment")
     */
    private $conseiller;

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

    /**
     * @return mixed
     */
    public function getTypeAppointment()
    {
        return $this->typeAppointment;
    }

    /**
     * @param mixed $typeAppointment
     */
    public function setTypeAppointment($typeAppointment)
    {
        $this->typeAppointment = $typeAppointment;
    }

    /**
     * @return mixed
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * @param mixed $candidat
     */
    public function setCandidat($candidat)
    {
        $this->candidat = $candidat;
    }

    /**
     * @return mixed
     */
    public function getConseiller()
    {
        return $this->conseiller;
    }

    /**
     * @param mixed $conseiller
     */
    public function setConseiller($conseiller)
    {
        $this->conseiller = $conseiller;
    }

}

