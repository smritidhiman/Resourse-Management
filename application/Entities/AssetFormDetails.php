<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssetFormDetails
 *
 * @Table(name="asset_form_details")
 * @Entity
 */
class AssetFormDetails
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var date $dateOfResign
     *
     * @Column(name="date_of_resign", type="date", nullable=false)
     */
    private $dateOfResign;

    /**
     * @var date $lastDayOfWorking
     *
     * @Column(name="last_day_of_working", type="date", nullable=false)
     */
    private $lastDayOfWorking;

    /**
     * @var string $rhStatus
     *
     * @Column(name="RH_status", type="string", nullable=true)
     */
    private $rhStatus;

    /**
     * @var string $itStatus
     *
     * @Column(name="IT_status", type="string", nullable=true)
     */
    private $itStatus;

    /**
     * @var string $hrStatus
     *
     * @Column(name="HR_status", type="string", nullable=true)
     */
    private $hrStatus;

    /**
     * @var date $dateCreated
     *
     * @Column(name="date_created", type="date", nullable=true)
     */
    private $dateCreated;

    /**
     * @var date $dateUpdated
     *
     * @Column(name="date_updated", type="date", nullable=true)
     */
    private $dateUpdated;

    /**
     * @var Employee
     *
     * @ManyToOne(targetEntity="Employee")
     * @JoinColumns({
     *   @JoinColumn(name="emp_id", referencedColumnName="emp_id")
     * })
     */
    private $emp;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateOfResign
     *
     * @param date $dateOfResign
     */
    public function setDateOfResign($dateOfResign)
    {
        $this->dateOfResign = $dateOfResign;
    }

    /**
     * Get dateOfResign
     *
     * @return date 
     */
    public function getDateOfResign()
    {
        return $this->dateOfResign;
    }

    /**
     * Set lastDayOfWorking
     *
     * @param date $lastDayOfWorking
     */
    public function setLastDayOfWorking($lastDayOfWorking)
    {
        $this->lastDayOfWorking = $lastDayOfWorking;
    }

    /**
     * Get lastDayOfWorking
     *
     * @return date 
     */
    public function getLastDayOfWorking()
    {
        return $this->lastDayOfWorking;
    }

    /**
     * Set rhStatus
     *
     * @param string $rhStatus
     */
    public function setRhStatus($rhStatus)
    {
        $this->rhStatus = $rhStatus;
    }

    /**
     * Get rhStatus
     *
     * @return string 
     */
    public function getRhStatus()
    {
        return $this->rhStatus;
    }

    /**
     * Set itStatus
     *
     * @param string $itStatus
     */
    public function setItStatus($itStatus)
    {
        $this->itStatus = $itStatus;
    }

    /**
     * Get itStatus
     *
     * @return string 
     */
    public function getItStatus()
    {
        return $this->itStatus;
    }

    /**
     * Set hrStatus
     *
     * @param string $hrStatus
     */
    public function setHrStatus($hrStatus)
    {
        $this->hrStatus = $hrStatus;
    }

    /**
     * Get hrStatus
     *
     * @return string 
     */
    public function getHrStatus()
    {
        return $this->hrStatus;
    }

    /**
     * Set dateCreated
     *
     * @param date $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Get dateCreated
     *
     * @return date 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateUpdated
     *
     * @param date $dateUpdated
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * Get dateUpdated
     *
     * @return date 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set emp
     *
     * @param Employee $emp
     */
    public function setEmp(Employee $emp)
    {
        $this->emp = $emp;
    }

    /**
     * Get emp
     *
     * @return Employee 
     */
    public function getEmp()
    {
        return $this->emp;
    }
}