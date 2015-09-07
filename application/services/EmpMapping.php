<?php

class Service_EmpMapping
{
	public function getRHId($emp_id)
	{
		$em = Zend_Registry::get("em"); 
		$qb = $em->createQueryBuilder();
		$qb->select('u')
			->from('Entities\EmpMapping', 'u')
			->where('u.emp = ?1')
			->setParameters(array(1=>$emp_id));
        $query = $qb->getQuery();					//print_r($query); 
		$rh = $query->getSingleResult();  		//var_dump($rh); exit;
		$rhid=$rh->getRh(); 						//var_dump($rh); exit;
		return 	$rhid;	
	}
}