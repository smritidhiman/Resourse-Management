<?php


class Service_AssetFormDetails
{
	public function putastform($empDateOfResign,$lastDayofWorking,$emp_id)
	{
		$em = Zend_Registry::get("em");
		$queryBuilder = $em->createQueryBuilder();
		
		$astform = new Entities\AssetFormDetails;
		if($empDateOfResign!=null)
		{
			$astform->setDateOfResign(new DateTime($empDateOfResign)); 
		}
		if($lastDayofWorking!=null) 
		{
			$astform->setLastDayOfWorking(new DateTime($lastDayofWorking)); 
		}
		$empid = $em->find('Entities\Employee', $emp_id);
		
		$astform->setEmp($empid);
	
		$astform->setDateCreated(new DateTime());
		
		$em->persist($astform);
		$em->flush(); 
		return $astform->getId();
	}
	public function chkAssetId($emp_id)
	{
		$em = Zend_Registry::get("em"); 
		$qb = $em->createQueryBuilder(); 
		$qb->select('ead','afd')
			->from('Entities\EmpAssetDetails', 'ead')
			->innerJoin('ead.assetform','afd')
			->where('afd.emp  =:emp_id')
			->setParameter('emp_id', $emp_id);
		$query = $qb->getQuery(); //var_dump($query); exit;
		$checkid = $query->getResult(); //var_dump($checkid); exit;
		return $checkid;
	}
	
}
?>

<?php
 // $qb->select('e.empName', 'e.empDesignation')
           // ->from('Entities\EmpMapping','em')
           // ->innerJoin('em.rh', 'e')
           // ->where('em.emp =:emp_id')
           // ->setParameter('emp_id', $emp_id);
// $qb->select('$emp_id')
			// ->from('Entities\AssetFormDetails', 'u')
			// ->where('u.id=?1')
			// ->setParameters(array(1=>$emp_id));
			
// public function getastformId($emp_id, $assetId) 
	// {
		// $em = Zend_Registry::get("em");
		// $qb = $em->createQueryBuilder();
		// $employee = $em->find('Entities\Employee', $emp_id);
		// $assetForm = $em->getRepository('Entities\AssetFormDetails')
						// ->findBy(array('emp' => $employee->getEmpId(), 'id' => $assetId));
						
						//var_dump($assetForm);
		// /*if(!$assetForm) {
			
		
		// }*
		 
		 
		// /*$qb->select('u.id')
			// ->from('Entities\AssetFormDetails', 'u')
			// ->where('u.emp=?1')
			// ->setParameters(array(1=>$empid));
		// $query = $qb->getQuery(); 						//print_r($query); exit;
		// $id = $query->getSingleResult();	*/			//var_dump($id); exit;
		// return 3; 
	// }
?>














