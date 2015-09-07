<?php


namespace Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @Table(name="employee")
 * @Entity
 */
class Employee
{
    /**
     * @var integer $empId
     *
     * @Column(name="emp_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $empId;

    /**
     * @var text $empName
     *
     * @Column(name="emp_name", type="text", nullable=true)
     */
    private $empName;

    /**
     * @var integer $empCode
     *
     * @Column(name="emp_code", type="integer", nullable=true)
     */
    private $empCode;

    /**
     * @var text $empDesignation
     *
     * @Column(name="emp_designation", type="text", nullable=true)
     */
    private $empDesignation;

    /**
     * @var date $dateOfJoining
     *
     * @Column(name="date_of_joining", type="date", nullable=true)
     */
    private $dateOfJoining;

    /**
     * @var string $emailId
     *
     * @Column(name="email_id", type="string", length=100, nullable=true)
     */
    private $emailId;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=100, nullable=true)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string $userType
     *
     * @Column(name="user_type", type="string", nullable=true)
     */
    private $userType;


    /**
     * Get empId
     *
     * @return integer 
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * Set empName
     *
     * @param text $empName
     */
    public function setEmpName($empName)
    {
        $this->empName = $empName;
    }

    /**
     * Get empName
     *
     * @return text 
     */
    public function getEmpName()
    {
        return $this->empName;
    }

    /**
     * Set empCode
     *
     * @param integer $empCode
     */
    public function setEmpCode($empCode)
    {
        $this->empCode = $empCode;
    }

    /**
     * Get empCode
     *
     * @return integer 
     */
    public function getEmpCode()
    {
        return $this->empCode;
    }

    /**
     * Set empDesignation
     *
     * @param text $empDesignation
     */
    public function setEmpDesignation($empDesignation)
    {
        $this->empDesignation = $empDesignation;
    }

    /**
     * Get empDesignation
     *
     * @return text 
     */
    public function getEmpDesignation()
    {
        return $this->empDesignation;
    }

    /**
     * Set dateOfJoining
     *
     * @param date $dateOfJoining
     */
    public function setDateOfJoining($dateOfJoining)
    {
        $this->dateOfJoining = $dateOfJoining;
    }

    /**
     * Get dateOfJoining
     *
     * @return date 
     */
    public function getDateOfJoining()
    {
        return $this->dateOfJoining;
    }

    /**
     * Set emailId
     *
     * @param string $emailId
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
    }

    /**
     * Get emailId
     *
     * @return string 
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set userType
     *
     * @param string $userType
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
    }

    /**
     * Get userType
     *
     * @return string 
     */
    public function getUserType()
    {
        return $this->userType;
    }
}