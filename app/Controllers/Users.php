<?php

namespace App\Controllers;

use App\Models\RegisterModel;
use App\Models\LoginModel;

class Users extends BaseController
{

	public $registerModel = '';
	public $LoginModel = '';

	public function __construct()
	{
		helper(['form', 'url']);
		$this->registerModel = new RegisterModel();
		$this->LoginModel = new LoginModel();
		$session = session();
	}


	public function index()
	{

		echo view('templates/header');
		echo view('login');
		echo view('templates/footer');
	}

	public function signup()
	{
		echo view('templates/header');
		echo view('add_user');
		echo view('templates/footer');
	}




	public function checkLogin()
	{

		$data = array('email' => $this->request->getVar('email'), 'password' => $this->request->getVar('password'));
		$user =  $this->LoginModel->where($data);
		$rows = $this->LoginModel->countAllResults();
		$session = session();
		if ($rows == 1) {
			$session->set('login_status', 1);
			return redirect()->to(base_url('/users/allusers'));
		} else {
			// $session->setFlashdata('msg', 'Invalid User');
			$session->setTempdata('error', 'Sorry! Email or Password is Incorrect', 2);
			$session->set('login_status', 0);
			return redirect()->to(base_url());
		}
	}
	public function allUsers()
	{

		$session = session();
		if ($session->get('login_status') == 1) {
			$data['user_details'] = $this->registerModel->getUser();
			echo view('templates/header');
			echo view('user_details', $data);
			echo view('templates/footer');
		} else {
			$session->setTempdata('error', 'Sorry! Please login first', 2);
			return redirect()->to(base_url());
		}
	}

	public function logout()
	{
		$session = session();
		$session->set('login_status', 0);
		$session->destroy();
		return redirect()->to(base_url());
	}




	public function delUser()
	{
		$session = session();
		$u_id = $this->request->getVar('u_id');
		$mult_id = $this->request->getVar('user_id[]');
		if ($this->request->getVar('act') == 'delete_multi_user') {
			if ($mult_id == 0) {
				$session->setTempdata('error', 'Sorry! Please select Records to Delete', 2);
				return redirect()->to(base_url('/users/allUsers'));
			} else {
				foreach ($mult_id as $m_id) {
					$data = $this->registerModel->find($m_id);
					$image = $data['pic'];
					if (file_exists('uploads/' . $image)) {
						unlink('uploads/' . $image);
					}
					$data['user'] = $this->registerModel->where('id', $m_id)->delete();
				}
				if ($data['user']) {

					$session->setTempdata('success', 'Records Deleted successfully', 2);
					return redirect()->to(base_url('/users/allUsers'));
				} else {
					$session->setTempdata('error', 'Sorry! Something went wrong ngvjh', 2);
					return redirect()->to(base_url('/users/allUsers'));
				}
			}
			$session->setTempdata('success', 'Records Deleted successfully', 2);
			return redirect()->to(base_url('/users/allUsers'));
		} else {
			$data = $this->registerModel->find($u_id);
			$image = $data['pic'];
			if (file_exists('uploads/' . $image)) {
				unlink('uploads/' . $image);
			}
			$data['user'] = $this->registerModel->where('id', $u_id)->delete();
			if ($data['user']) {

				$session->setTempdata('success', 'Records Deleted successfully', 2);
				return redirect()->to(base_url('/users/allUsers'));
			} else {
				$session->setTempdata('error', 'Sorry! Something went wrong', 2);
				return redirect()->to(base_url('/users/allUsers'));
			}
		}
	}


	public function editUser($u_id = null)
	{
		$session = session();
		if ($session->get('login_status') == 1) {
			$data['user_details'] = $this->registerModel->editUser($u_id);
			echo view('templates/header');
			echo view('edit_user', $data);
			echo view('templates/footer');
		} else {
			$session->setTempdata('error', 'Sorry! Please login first', 2);
			return redirect()->to(base_url());
		}
	}

	public function update_user()
	{
		$session = session();
		$hobby1 = $this->request->getVar('hobby');
		$hoby = "";
		foreach ($hobby1 as $hoby1) {
			$hoby .= $hoby1 . ",";
		}
		$u_id = $this->request->getVar('u_id');
		$data = $this->registerModel->find($u_id);
		$image = $data['pic'];
		if (file_exists('uploads/' . $image)) {
			unlink('uploads/' . $image);
		}

		$file = $this->request->getFile('myfile');
		$newName = $file->getRandomName();
		$file->move('uploads/', $newName);

		$updateddata = [

			'username' => $this->request->getVar('username', FILTER_SANITIZE_STRING),
			'email'    => $this->request->getVar('email'),
			'password' => $this->request->getVar('password'),
			'gender'    => $this->request->getVar('gender'),
			'hobby' => $hoby,
			'city'    => $this->request->getVar('city'),
			'dob'    => $this->request->getVar('bday'),
			'address'    => $this->request->getVar('address'),
			'pic'    => $newName

		];

		$registerModel = new RegisterModel();
		if ($registerModel->updateUser($u_id, $updateddata)) {
			$session->setTempdata('success', 'Account updated successfully', 2);
			return redirect()->to(base_url('/users/allUsers'));
		} else {
			$session->setTempdata('error', 'Sorry! unable to update, Try again', 2);
			return redirect()->to(base_url('/users/allUsers'));
		}
	}
}
