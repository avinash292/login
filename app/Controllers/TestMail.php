<?php 

namespace App\Controllers;

/**
 * 
 */
class TestMail extends BaseController
{
	public function index() {

		$email = \Config\Services::email();
		$email->setTo($to);
		$email->setSubject($subject);
		$email->setMessage($message);
		$email->send();
	}
}