<?php
//use Service\Employee;
class LoginController extends Zend_Controller_Action
{
	// function login to login with username and password
	public function loginAction()
	{
		$LoginForm=new Application_Form_LoginForm();
		$this->view->employee=$LoginForm;
		$postdata=$this->getRequest()->getPost();
		//print_r($postdata);die;
		if($postdata)
		{
			if ($LoginForm->isValid($postdata)) 
			{
				$username=$postdata['username'];
				$password=$postdata['password'];
				
				$log= new Service_Employee();
				$getlogin=$log->get($username,$password);
				//print_r($getlogin); die('tested');
				if(!empty($getlogin))
				{ //var_dump($getlogin); exit;
					$emp_id=$getlogin->getEmpId();  
					//var_dump($emp_id); exit;					// Setting emp_id in Session 
					echo("Login Successfully");
					$authNamespace = new Zend_Session_Namespace('assetform');
					$authNamespace->username = $username;
					$authNamespace->emp_id =$emp_id;
					//$authNamespace->password = "admin";
					$this->_helper->redirector('asset','Asset');
				}
			   else
			   {
					echo("Wrong Entry");
			   }
			}
		}
    }
	//function logout to end session
	public function logoutAction()
	{
		Zend_Session::destroy();
		$this->_redirect('/login/login');
	}
}