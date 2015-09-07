<?php


class Service_EmpAssetDetails
{
	public function putTechDetailsReceipt($tech_details,$receiptOfAsset,$assetHandedOver,$ast_id,$getAstForm)
	{ 	//var_dump($ast_id); exit;				
	
		$em = Zend_Registry::get("em");
		$queryBuilder = $em->createQueryBuilder();
		
		$techDetails = new Entities\EmpAssetDetails;
		
		$techDetails->setTechDetails($tech_details);
		$techDetails->setAssetReciept($receiptOfAsset);
		$techDetails->setAssetHandover($assetHandedOver);
		
		$asset = $em->find('Entities\Asset', $ast_id); 
		$astformId=$em->find('Entities\AssetFormDetails', $getAstForm); 
		
		$techDetails->setAssetform($astformId);
		
		$techDetails->setAsset($asset);
		
		$em->persist($techDetails);
		//$query = $queryBuilder->getQuery(); //var_dump($query); exit;
		$em->flush(); 
	}
	// public function chkAstId($ast_id)
	// {
		// $em = Zend_Registry::get("em"); 
		// $qb = $em->createQueryBuilder(); 
		// $qb->select('$ast_id')
			// ->from('Entities\EmpAssetDetails', 'u')
			// ->where('u.asset_id=?1')
			// ->setParameters(array(1=>$ast_id));
		// $query = $qb->getQuery();
		// $chkid = $query->getResult(); var_dump($chkid); exit;
		// return $chkid;
	// }
	
}
		