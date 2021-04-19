<?php namespace App\Models;
use CodeIgniter\Model;

class M_user extends Model{

	//ppij
	//logged in info
	public function get_memberWhere($id){
		$query=$this->db->query("SELECT a.*, b.account_id, b.account_name, b.user_level_id, c.*, d.*, e.school_id,e.school_name,e.komsat_id,f.komsat_id,f.komsat_name,f.korda_id,g.korda_id,g.korda_name FROM member a, account b, afiliasi c, user_level d, school e, komsat f, korda g WHERE a.account_id=b.account_id AND a.afiliasi_id=c.afiliasi_id AND b.user_level_id=d.user_level_id AND c.school_id=e.school_id AND e.komsat_id=f.komsat_id AND f.korda_id=g.korda_id AND a.account_id='".$id."'");
        return $query->getResult('array');
	}

	public function get_afiliasi($id){
		$query=$this->db->query("SELECT a.*, b.*, c.*, d.* FROM afiliasi a, school b, komsat c, korda d WHERE a.school_id=b.school_id AND b.komsat_id=c.komsat_id AND c.korda_id=d.korda_id AND a.afiliasi_id='".$id."'");
        return $query->getResult('array');
	}

	//signup
	public function insertAccount($data){
		return $this->db->table('account')->insert($data);
	}

	public function insertUser($user){
		return $this->db->table('member')->insert($user);
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
	//end of signup

	//user level
	public function get_user_level(){
		$query=$this->db->query("SELECT * FROM user_level");
        return $query->getResult('array');
	}

	public function insertUserLevel($data){
		return $this->db->table('user_level')->insert($data);
	}

	public function deleteUserLevel($id){
		return $this->db->table('user_level')->delete(array('user_level_id'=>$id));
	}

	public function updateUserLevel($data,$id){
		return $this->db->table('user_level')->update($data,array('user_level_id'=>$id));
	}

	public function get_userlevelWhere($id){
		$query=$this->db->query("SELECT * FROM user_level WHERE user_level_id='".$id."'");
        return $query->getResult('array');
	}
	//end of user level

	//account, member, afiliasi
	public function updateMember($data){
		return $this->db->table('member')->update($data,array('member_id'=>$data['member_id']));
	}

	public function get_member(){
		$query=$this->db->query("SELECT a.*, b.account_id, b.user_level_id, c.*, d.*, e.school_id,e.school_name,e.komsat_id,f.komsat_id,f.komsat_name,f.korda_id,g.korda_id,g.korda_name FROM member a, account b, afiliasi c, user_level d, school e, komsat f, korda g WHERE a.account_id=b.account_id AND a.afiliasi_id=c.afiliasi_id AND b.user_level_id=d.user_level_id AND c.school_id=e.school_id AND e.komsat_id=f.komsat_id AND f.korda_id=g.korda_id");
        return $query->getResult('array');
	}

	public function get_school(){
		$query=$this->db->query("SELECT a.korda_id, a.komsat_id, a.komsat_name, b.korda_id, b.korda_name, c.komsat_id, c.school_id, c.school_name, c.description FROM komsat a, korda b, school c WHERE a.korda_id=b.korda_id AND a.komsat_id=c.komsat_id");
        return $query->getResult('array');
	}

	public function get_jurnalWhereMember($id){
		$query=$this->db->query("SELECT a.*, b.*, c.member_id, c.fullname FROM repository a, journal b, member c WHERE a.journal_id=b.journal_id AND a.member_id=c.member_id AND a.member_id='".$id."'");
        return $query->getResult('array');
	}

	//end of account, member, afiliasi

	//Repo Jurnal
	public function get_jurnal(){
		$query=$this->db->query("SELECT a.*, b.*, c.member_id, c.fullname FROM repository a, journal b, member c WHERE a.journal_id=b.journal_id AND a.member_id=c.member_id");
        return $query->getResult('array');
	}

	//end of Repo Jurnal

	//end ppij
	
}