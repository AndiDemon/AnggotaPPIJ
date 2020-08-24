<?php namespace App\Models;
use CodeIgniter\Model;

class M_user extends Model{
	public function get_user(){
		//return $this->db->table('user')->get()->getResultArray();
		$query=$this->db->query("SELECT * FROM user a, account b, user_level c WHERE a.account_id=b.account_id AND b.user_level_id=c.user_level_id");
        return $query->getResult('array');
	}

	public function get_countUser(){
		//return $this->db->table('user')->get()->getResultArray();
		$query=$this->db->query("SELECT count(user_id) as countUser FROM user");
        return $query->getResult('array');
	}

	public function get_userWhere($name){
		$query=$this->db->query("SELECT * FROM user a, account b, user_level c WHERE a.account_id=b.account_id AND b.user_level_id=c.user_level_id AND b.account_name='".$name."'");
        return $query->getResult('array');
	}

	public function get_user_level(){
		$query=$this->db->query("SELECT * FROM user_level");
        return $query->getResult('array');
	}

	public function updateAccount($data,$name){
		return $this->db->table('account')->update($data,array('account_name'=>$name));
	}

	public function updateUser($data,$id){
		return $this->db->table('user')->update($data,array('user_id'=>$id));
	}

	public function getID($id){
		//return $this->db->table('user')->get()->getResultArray();
		$query=$this->db->query("SELECT account_id FROM account WHERE account_id='".$id."'");
        return $query->getResult('array');
	}

	public function getName($name){
		//return $this->db->table('user')->get()->getResultArray();
		$query=$this->db->query("SELECT account_name FROM account WHERE account_name='".$name."'");
        return $query->getResult('array');
	}

	public function insertAccount($data){
		return $this->db->table('account')->insert($data);
	}

	public function insertUser($data){
		return $this->db->table('user')->insert($data);
	}

	public function deleteAccount($id){
		return $this->db->table('account')->delete(array('account_id'=>$id));
	}

	public function deleteUser($id){
		return $this->db->table('user')->delete(array('user_id'=>$id));
	}
}