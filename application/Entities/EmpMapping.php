<?php


namespace Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * EmpMapping
 *
 * @Table(name="emp_mapping")
 * @Entity
 */
class EmpMapping
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
     * @var Employee
     *
     * @ManyToOne(targetEntity="Employee")
     * @JoinColumns({
     *   @JoinColumn(name="RH_id", referencedColumnName="emp_id")
     * })
     */
    private $rh;

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
     * Set rh
     *
     * @param Employee $rh
     */
    public function setRh(Employee $rh)
    {
        $this->rh = $rh;
    }

    /**
     * Get rh
     *
     * @return Employee 
     */
    public function getRh()
    {
        return $this->rh;
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