<?php


class Service_asset
{
	
	public function getast() 
	{
		$em = Zend_Registry::get("em");
		$qb = $em->createQueryBuilder();
		$qb->select('u')
			->from('Entities\Asset', 'u');
		$query = $qb->getQuery(); //echo($query); exit;
		$ast = $query->getResult();
		return $ast;
	}
	public function getastId() 
	{
		$em = Zend_Registry::get("em");
		$qb = $em->createQueryBuilder();
		$qb->select('u.assetId')
			->from('Entities\Asset', 'u');
		$query = $qb->getQuery(); //echo($query); exit;
		$assetID = $query->getResult();
		
		$assetIds = array();
		$subArray = array();
		foreach($assetID as $subArray)
		{
			foreach($subArray as $val)
			{
			$assetIds[] = $val;
			}
		}
		return $assetIds;
	}
	public function putId($ast_id)
	{
		$em = Zend_Registry::get("em");
		$queryBuilder = $em->createQueryBuilder();
		$ast_Id = new Entities\EmpAssetDetails;
		
		
		$ast_Id->setTechDetails($ast_id);
		
	
		$em->persist($ast_id);
		
		
		$em->flush(); 
		
	}
	
}