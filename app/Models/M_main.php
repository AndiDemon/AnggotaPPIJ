<?php namespace App\Models;
use CodeIgniter\Model;

class M_main extends Model{

	public function get_item(){
		$query=$this->db->query("SELECT * FROM item a, category b, collection c, user d, account e, item_image f WHERE a.category_id=b.category_id AND c.item_id=a.item_id AND c.user_id=d.user_id AND d.account_id=e.account_id AND a.item_id=f.item_id ORDER BY a.item_id DESC LIMIT 8");
        return $query->getResult('array');
	}

	public function get_itemDetail($id){
		$query=$this->db->query("SELECT * FROM item a, category b, collection c, user d, account e, item_image f WHERE a.category_id=b.category_id AND c.item_id=a.item_id AND c.user_id=d.user_id AND d.account_id=e.account_id AND a.item_id=f.item_id AND a.item_id='".$id."'");
        return $query->getResult('array');
	}

	public function get_find(){
		$query=$this->db->query("SELECT * FROM item a, category b, collection c, user d, account e, item_image f WHERE a.category_id=b.category_id AND c.item_id=a.item_id AND c.user_id=d.user_id AND d.account_id=e.account_id AND a.item_id=f.item_id ORDER BY a.item_id DESC");
        return $query->getResult('array');
	}

	public function get_category(){
		$query=$this->db->query("SELECT * FROM category");
        return $query->getResult('array');
	}
}