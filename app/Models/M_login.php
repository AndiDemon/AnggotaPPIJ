<?php namespace App\Models;
use CodeIgniter\Model;

class M_login extends Model{

	public function get_categories(){
		$query=$this->db->query("SELECT * FROM category");
        return $query->getResult('array');
	}

	public function check($username,$password){
		return $this->db->table('account')
		->where(array('account_name' => $username,'account_password' =>$password))
		->get()->getRowArray();
	}
}