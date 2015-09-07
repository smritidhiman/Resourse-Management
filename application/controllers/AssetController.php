<?php
//use Zend\Mail;
//include 'Mail.php';

class AssetController extends Zend_Controller_Action
{
	
	public function init()
	{
		$authNamespace = new Zend_Session_Namespace('assetform');
		$username=$authNamespace->username;	
		if(!$username)
		{
			$this->_redirect('/Login/Login');
		}
	}
	public function assetAction()
	{
		$assetform=new Application_Form_assetForm();
		$this->view->asset=$assetform;
		$postdata=$this->getRequest()->getPost();
		//var_dump($postdata); exit;
		$ast= new Service_asset();
		$getAst=$ast->getast();
		$this->view->assetname=$getAst;
		
		$detail= new Service_Employee();
		$authNamespace = new Zend_Session_Namespace('assetform');
		$emp_id = $authNamespace->emp_id;
		
		$getdetail=$detail->getEmpDetails($emp_id);
		$this->view->detailname=$getdetail; 
		
		$getRHdesg=$detail->getRhDesgn($emp_id);
		$this->view->rhDesignation=$getRHdesg; //var_dump(count($postdata)); exit;
		$chkEmail= new Service_EmpMapping();
			
		$rhId=$chkEmail->getRHId($emp_id); 
		//$rhid=$rhId->getRh();         var_dump($rhid); exit;
		$emailId=$detail->getEmailId($rhId);		//var_dump($emailId); exit;
		$this->view->asset=$assetform;
		
		$emails=new Web_Mail();
		
		$em=$emails->email(); //var_dump($em); exit;
		/*$mail = new Zend_Mail();
		$mail->setType(Zend_Mime::MULTIPART_RELATED);
		$mail->setBodyHtml($email_body);
		$mail->setFrom('smriti.meenu@gmail.com', 'smriti');
		$mail->addTo('smriti.dhiman@sts.in', 'dhiman');
		$mail->setSubject('Testing SendMail subject goes here');
		$mail->send();
*/
			
		if($postdata) 
			{ 		
				$empName=$postdata['empName'];
				$empCode=$postdata['empCode'];
				$empDesignation=$postdata['empDesignation'];
				$empDateOfJoining=$postdata['empDateOfJoining'];
				$empDateOfResign=$postdata['empDateOfResign'];
				$lastDayofWorking=$postdata['lastDayofWorking'];
				$reportingHead=$postdata['reportingHead'];
				$reportingHeadDesignation=$postdata['reportingHeadDesignation'];
				$astid= new Service_asset();
				$assetids=$astid->getastId();   
				$assetidArray = array();
				$authNamespace = new Zend_Session_Namespace('assetform');
				$emp_id = $authNamespace->emp_id;
				$assetFormDetails= new Service_AssetFormDetails();
				$checkId=$assetFormDetails->chkAssetId($emp_id);
				if($checkId==null)
				{
					$formAssetId = $assetFormDetails->putastform($empDateOfResign, $lastDayofWorking, $emp_id); }
					$empAssetDetails= new Service_EmpAssetDetails();
					foreach($assetids as $ast_id)
					{
						$tech_details=$postdata['tech_details_'.$ast_id]; 
						$receiptOfAsset=$postdata['receiptOfAsset_'.$ast_id];	
						$assetHandedOver=$postdata['assetHandedOver_'.$ast_id];	
						if($checkId==null) 
						{
							if($tech_details!='' || $receiptOfAsset == '1' || $assetHandedOver == '1') 
							{ 
								$techReceiptDetail=$empAssetDetails->putTechDetailsReceipt($tech_details, $receiptOfAsset, $assetHandedOver, $ast_id, $formAssetId);
							} 
						}
					}
				
				//$saveData=$postdata['saveData']; 
			//	$this->view->detailtechreceipt=$techReceiptDetail;
			}		
			
	}
		public function submitAction()
		{
			$assetform=new Application_Form_assetForm();
			
			$authNamespace = new Zend_Session_Namespace('assetform');
			$emp_id = $authNamespace->emp_id; //var_dump($emp_id); exit;
			
			$chkEmail= new Service_EmpMapping();
			//$emailId=$chkEmail->getEmailId($emp_id);
			$rhId=$chkEmail->getRHId($emp_id);
			$this->view->asset=$assetform;
			
			
			// $mail = new Zend_Mail();
			// $mail->setType(Zend_Mime::MULTIPART_RELATED);
			// $mail->setBodyHtml($email_body);
			// $mail->setFrom('smriti.meenu@gmail.com', 'smriti');
			// $mail->addTo('smriti.dhiman@sts.in', 'dhiman');
			// $mail->setSubject('Testing SendMail subject goes here');
			// $mail->send();
			
		}
}
	
	