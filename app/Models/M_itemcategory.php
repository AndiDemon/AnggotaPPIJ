<?php namespace App\Models;
use CodeIgniter\Model;

class M_itemcategory extends Model{
	public function get_category(){
		//return $this->db->table('user')->get()->getResultArray();
		$query=$this->db->query("SELECT * FROM category");
        return $query->getResult('array');
	}

	public function get_categoryWhere($name){
		$query=$this->db->query("SELECT category FROM category WHERE category='".$name."'");
        return $query->getResult('array');
	}

	public function get_categoryID($id){
		$query=$this->db->query("SELECT * FROM category WHERE category_id='".$id."'");
        return $query->getResult('array');
	}

	public function insertCategory($data){
		return $this->db->table('category')->insert($data);
	}

	public function updateCategory($data,$id){
		return $this->db->table('category')->update($data,array('category_id'=>$id));
	}

	public function deleteCategory($id){
		return $this->db->table('category')->delete(array('category_id'=>$id));
	}
}