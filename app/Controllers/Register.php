<?php 

namespace App\Controllers;
use App\Models\RegisterModel;
	/**
	 * 
	 */
	class Register extends BaseController
	{
		public $session;
		public function __construct()
	    {
	        helper('form','url');
	        $session = \Config\Services::session();
	        $session->start();
	    }
		
		public function addUser () {
	  		if($this->request->getMethod() == 'post'){
	 			$session = \Config\Services::session();
	        	$session->start();
	 			$uni_id = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz'.time()));
					//$expertise = $this->request->getVar('hobby');
					$hobby1= $this->request->getVar('hobby');  
					$hoby="";  
					foreach($hobby1 as $hoby1)  
					   {  
					      $hoby .= $hoby1.",";  
					   } 	

					   $file = $this->request->getFile('myfile');
					   $newName = $file->getRandomName();
					   $file->move('uploads/',$newName);


	 			$userdata =[
	 			
	 				'username' => $this->request->getVar('username',FILTER_SANITIZE_STRING),
	 				'email'    => $this->request->getVar('email'),
	 				'password' => $this->request->getVar('password'),
	 				'gender'    => $this->request->getVar('gender'),
	 				'hobby' => $hoby,
	 				'city'    => $this->request->getVar('city'),
	 				'dob'    => $this->request->getVar('bday'),
	 				'address'    => $this->request->getVar('address'),
	 				'pic'    => $newName,
	 				'uni_id' => $uni_id,
	 				'activation_date' => date("y-m-d h:i:s")

	 			];

	 			$registerModel = new RegisterModel();
	 			if($registerModel->createUser($userdata)) 
	 			{
	 				$session->setTempdata('success','User Added successfully',2);
						//return redirect()->to(current_url());
	 				return redirect()->to( base_url('/users/signup'));
	 				
	 			}
	 			else
	 			{
	 				$session->setTempdata('error','Sorry! unable to create account, Try again',2);
	 				//return redirect()->to(current_url());
	 				return redirect()->to( base_url('/users/signup'));
	 			}
	 			
	 		}
	 		
		}
	}
