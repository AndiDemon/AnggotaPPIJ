<?php namespace App\Models;
use CodeIgniter\Model;

class M_core extends Model{
	
	//ppij
	//korda
	public function get_korda(){
		$query=$this->db->query("SELECT * FROM korda");
        return $query->getResult('array');
	}

	public function insertKorda($data){
		return $this->db->table('korda')->insert($data);
	}

	public function deleteKorda($id){
		return $this->db->table('korda')->delete(array('korda_id'=>$id));
	}

	public function updateKorda($data,$id){
		return $this->db->table('korda')->update($data,array('korda_id'=>$id));
	}

	public function get_kordaWhere($id){
		$query=$this->db->query("SELECT * FROM korda WHERE korda_id='".$id."'");
        return $query->getResult('array');
	}

	public function get_komsatWhereKorda($id){
		$query=$this->db->query("SELECT * FROM komsat WHERE korda_id='".$id."'");
        return $query->getResult('array');
	}

	//end of korda

	//komsat
	public function get_komsat(){
		$query=$this->db->query("SELECT a.korda_id, a.komsat_id, a.komsat_name, a.description, b.korda_id, b.korda_name FROM komsat a, korda b WHERE a.korda_id=b.korda_id");
        return $query->getResult('array');
	}

	public function insertKomsat($data){
		return $this->db->table('komsat')->insert($data);
	}

	public function deleteKomsat($id){
		return $this->db->table('komsat')->delete(array('komsat_id'=>$id));
	}

	public function updateKomsat($data,$id){
		return $this->db->table('komsat')->update($data,array('komsat_id'=>$id));
	}

	public function get_komsatWhere($id){
		$query=$this->db->query("SELECT * FROM komsat WHERE komsat_id='".$id."'");
        return $query->getResult('array');
	}

	public function get_schoolWhereKomsat($id){
		$query=$this->db->query("SELECT * FROM school WHERE komsat_id='".$id."'");
        return $query->getResult('array');
	}

	//end of komsat

	//school
	public function get_school(){
		$query=$this->db->query("SELECT a.korda_id, a.komsat_id, a.komsat_name, b.korda_id, b.korda_name, c.komsat_id, c.school_id, c.school_name, c.description FROM komsat a, korda b, school c WHERE a.korda_id=b.korda_id AND a.komsat_id=c.komsat_id");
        return $query->getResult('array');
	}

	public function insertSchool($data){
		return $this->db->table('school')->insert($data);
	}

	public function deleteSchool($id){
		return $this->db->table('school')->delete(array('school_id'=>$id));
	}

	public function updateSchool($data,$id){
		return $this->db->table('school')->update($data,array('school_id'=>$id));
	}

	public function get_schoolWhere($id){
		$query=$this->db->query("SELECT * FROM school WHERE school_id='".$id."'");
        return $query->getResult('array');
	}
	//end of school

	//end of ppij
}