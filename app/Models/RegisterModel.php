<?php 

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{

	public $table = 'user';
    public function createUser($data) {
		$builder = $this->db->table('user');
		$res = $builder->insert($data);
		if($this->db->affectedRows() == 1){
			return true;
		}
		else {
			return false;
		}
	}


	public function getUser(){
		$builder = $this->db->table('user');
		$result = $builder->get();
		return $result->getResult();
	}


	public function editUser($u_id)
	{
		$builder = $this->db->table('user');
		$result = $builder->where('id', $u_id)->get();
		return $result->getResult();
	}

	public function updateUser($u_id, $updateddata)
	{
		$builder = $this->db->table('user');
		$result = $builder->where('id', $u_id)->update($updateddata);
		return $result;
	}
}
