<?php class Application_Form_LoginForm extends Zend_Form
{
	//function init() to display login form 
    public function init()
    {
        $this->setMethod('Post');
		$username = new Zend_Form_Element_Text('username');
		//validations for username 
		$username->setLabel('username:')
				->setRequired(true)														// required field
				->addValidator('StringLength', false, array(3, 120))					// min 3 max 120
				->addValidator('Alpha')
				->addFilters(array('StringTrim'));
		$password = new Zend_Form_Element_Password('password');
		//validations for password
		$password->setLabel('password:')
				->setRequired(true)                           							// required field
				->addValidator('StringLength', false, array(3, 120))					// min 3 max 120
				->addValidator('Alpha')
				->addFilters(array('StringTrim'));		
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->setLabel('Login');
		//addElements to display the initialized username, password & submit
		$this->addElements(array(
									$username,
									$password,
									$submit
								)
							);	
	}
}
?>