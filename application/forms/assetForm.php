<?php
class Application_Form_assetForm extends Zend_Form
{
	// init() function to display form for new patient
	public function init()
	{
		$this->setMethod('Post');
		$empName = new Zend_Form_Element_Text('empName');
		$empName->setLabel('Employee Name:')
				->setRequired(true)																 // required field
				->addValidator('StringLength', false, array(3, 120))							 // min 3 max 120
				->addValidator('Alpha')
				->addFilters(array('StringTrim'));
		$empCode = new Zend_Form_Element_Text('empCode');
		$empCode->setLabel('Employee Code:')
				->setRequired(true)																// required field
				->addValidator('StringLength', false, array(3, 120))							// min 3 max 120
				->addValidator('Alpha')
				->addFilters(array('StringTrim'));
		$empDesignation = new Zend_Form_Element_Text('empDesignation');
		$empDesignation->setLabel('Designation:')
				->setRequired(true)																
				->addValidator('StringLength', false, array(3, 120))							
				->addValidator('Alpha')
				->addFilters(array('StringTrim'));
		$empDateOfJoining = new Zend_Form_Element_Text('empDateOfJoining');
		$empDateOfJoining->setLabel('Date of Joining:')
				->setRequired(true)																
				->addValidator('StringLength', false, array(3, 120))							
				->addFilters(array('StringTrim'));
		$empDateOfResign = new Zend_Form_Element_Text('empDateOfResign');
		$empDateOfResign->setLabel('Date of Resign:')
						->setRequired(true)																
						->addValidator('StringLength', false, array(3, 120))							
						->addFilters(array('StringTrim'));
		$lastDayofWorking=new Zend_Form_Element_Text('lastDayofWorking');
		$lastDayofWorking->setLabel('Last Day of Working:')
				->setRequired(true)																
				->addValidator('StringLength', false, array(3, 120))							
				->addFilters(array('StringTrim'));
		$reportingHead = new Zend_Form_Element_Text('reportingHead');
		$reportingHead->setLabel('Reporting Head:')
					->setRequired(true)																
				->addValidator('StringLength', false, array(3, 120))							 
				->addValidator('Alpha')
				->addFilters(array('StringTrim'));
		$reportingHeadDesignation = new Zend_Form_Element_Text('reportingHeadDesignation');
		$reportingHeadDesignation->setLabel('Reporting Head Designation:')
				->setRequired(true)																 
				->addValidator('StringLength', false, array(3, 120))							 
				->addValidator('Alpha')
				->addFilters(array('StringTrim'));
	//echo("Please fill the details against the Assets to be provided to the New Joinee this would be a part of the employee personal file & would be referred in case the employee resigns from his duties");
		$assetName = new Zend_Form_Element_Text('assetName');
		$assetName->setLabel('Name of Asset')
				->setRequired(true);
		$tech_details = new Zend_Form_Element_Text('tech_details');
		$tech_details->setLabel('Technical Details about the Asset:')
					->setRequired(true)	
					->addValidator('Alpha')
					->addFilters(array('StringTrim'));
		$receiptOfAsset = new Zend_Form_Element_checkbox('receiptOfAsset');
		$receiptOfAsset->setLabel('Receipt of the Asset')
						->addValidator('Alpha')
						->setRequired(true);
		$assetHandedOver = new Zend_Form_Element_checkbox('assetHandedOver');
		$assetHandedOver->setLabel(' Asset Handed Over')
						->addValidator('Alpha')
						->setRequired(true);
			
		/*$appRH= new Zend_Form_Element_Text('appRH');
		$appRH->setLabel('Reporting Head:')
					->setRequired(true)																 
					->addFilters(array('StringTrim'));	
		$appIT= new Zend_Form_Element_Text('appIT');
		$appIT->setLabel('IT :')
					->setRequired(true)																 
					->addFilters(array('StringTrim'));		
		$appHR= new Zend_Form_Element_Text('appHR');
		$appHR->setLabel('HR :')
					->setRequired(true)																 
					->addFilters(array('StringTrim'));*/
		
		$saveData = new Zend_Form_Element_Submit('saveData');
		$saveData->setLabel('Save');
		
		$submitRH = new Zend_Form_Element_Submit('submitRH');
		$submitRH->setLabel('Submit to Reporting Head');
		
		$submitIT = new Zend_Form_Element_Submit('submitIT');
		$submitIT->setLabel('Submit to IT');
		
		$submitHR = new Zend_Form_Element_Submit('submitHR');
		$submitHR->setLabel('Submit to HR');
		
		$this->addElements(array(
									$empName,
									$empCode,
									$empDesignation,
									$empDateOfJoining,
									$empDateOfResign,
									$lastDayofWorking,
									$reportingHead ,
									$reportingHeadDesignation,
									$tech_details,
									$receiptOfAsset,
									$assetHandedOver,
									$saveData,
									$submitRH,
									$submitIT,
									$submitHR
									
								)
							);
								
	}
}