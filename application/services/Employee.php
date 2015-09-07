<?php
use Doctrine\ORM\Query\ResultSetMapping;

class Service_Employee
{
	
	 public function get($username,$password) 
	{
	//$loginmodel= new \Entities\Login; 
	$em = Zend_Registry::get("em");
		$qb = $em->createQueryBuilder();
		$qb->select('u')
			->from('Entities\Employee', 'u')
			->where('u.username = ?1')
			->andWhere('u.password=?2')
			->setParameters(array(1 => $username,
								2=>$password));
       
        
			 
		$query = $qb->getQuery();
		$log = $query->getResult();// var_dump($log[0]); exit;
		 return isset($log[0])?$log[0]: null;
		 
	}
	public function getEmpDetails($emp_id)
	{  	
	    $em = Zend_Registry::get("em"); 
		$qb = $em->createQueryBuilder(); 
		$qb->select('u')
			->from('Entities\Employee', 'u')
			->where('u.empId=?1')
			->setParameters(array(1=>$emp_id));
		$query = $qb->getQuery();
		$empDetails = $query->getSingleResult(); 
		return $empDetails;
	}
	public function getRhDesgn($emp_id) 
	{	
		$em = Zend_Registry::get("em"); 
        $qb = $em->createQueryBuilder();
        $qb->select('e.empName', 'e.empDesignation')
           ->from('Entities\EmpMapping','em')
           ->innerJoin('em.rh', 'e')
           ->where('em.emp =:emp_id')
           ->setParameter('emp_id', $emp_id);
        $query = $qb->getQuery();
		$rhdesg = $query->getResult();
	//	var_dump($rhdesg); exit;
		$rhdesgs = array();
		$subArray = array();
		foreach($rhdesg as $subArray)
		{
			foreach($subArray as $val)
			{
				$rhdesgs[] = $val;
			}
		}
		return $rhdesgs;
	}
	
	
	
	public function getEmailId($rhId)
	{
		$em = Zend_Registry::get("em"); 
		$qb = $em->createQueryBuilder();
		$qb->select('e.emailId')
			->from('Entities\EmpMapping', 'em')
			->innerJoin('em.rh','e')
			->where('em.rh  =:rhId')
			->setParameter('rhId', $rhId);
		$query = $qb->getQuery(); //var_dump($query); exit;
		$emailid = $query->getResult(); //var_dump($emailid); exit;
		return $emailid;
	}
}	
	
	