<?php namespace App\Models;
use CodeIgniter\Model;

class M_transaction extends Model{
	public function get_transaction(){
		//return $this->db->table('user')->get()->getResultArray();
		$query=$this->db->query("SELECT a.dealing_id, e.account_name AS owner, taken.taken_name AS taken_by, c.item_name, a.dealing_date, a.description FROM dealing a, collection b, item c, user d, account e, (SELECT y.user_id AS taken_id, z.account_name AS taken_name FROM user y, account z WHERE y.account_id=z.account_id) as taken WHERE a.taken_by=taken.taken_id AND a.collection_id=b.collection_id AND b.item_id=c.item_id AND b.user_id=d.user_id AND d.account_id=e.account_id");
        return $query->getResult('array');
	}

	public function get_item(){
		//return $this->db->table('user')->get()->getResultArray();
		$query=$this->db->query("SELECT item_id, item_name FROM item");
        $output = $query->getResult('array');
        $display = '<option value="">Select Item</option>';
        foreach ($output as $row) {
        	$display .= '<option value="'.$row['item_id'].'">'.$row['item_name'].'</option>';
        }
        return $display;
	}

	public function fetch_item($id){
		$query=$this->db->query("SELECT b.item_id, b.item_name FROM collection a, item b WHERE a.item_id=b.item_id AND a.user_id='".$id."'");
        $output = $query->getResult('array');
        $display = '<option value="">Select Item</option>';
        foreach ($output as $row) {
        	$display .= '<option value="'.$row['item_id'].'">'.$row['item_name'].'</option>';
        }
        return $display;
	}

	public function get_itemDetail($id){
		//return $this->db->table('user')->get()->getResultArray();
		$query=$this->db->query("SELECT * FROM item a, category b, collection c, user d, account e, item_image f WHERE a.category_id=b.category_id AND c.item_id=a.item_id AND c.user_id=d.user_id AND d.account_id=e.account_id AND a.item_id=f.item_id AND a.item_id='".$id."'");
        return $query->getResult('array');
	}

	public function get_itemImage($id){
		$query=$this->db->query("SELECT * FROM item_image WHERE item_id='".$id."'");
        return $query->getResult('array');
	}

	public function get_account(){
		$query=$this->db->query("SELECT a.account_name, b.user_id FROM account a, user b WHERE a.account_id=b.account_id");
        return $query->getResult('array');
	}

	public function get_category(){
		$query=$this->db->query("SELECT category_id, category FROM category");
        return $query->getResult('array');
	}

	public function insertItemImage($data){
		return $this->db->table('item_image')->insert($data);
	}

	public function insertItem($data){
		return $this->db->table('item')->insert($data);
	}

	public function insertCollection($data){
		return $this->db->table('collection')->insert($data);
	}

	public function getUserID($name){
		$query = $this->db->query("SELECT user_id FROM user a, account b 
								 WHERE a.account_id=b.account_id 
								 AND b.account_name='".$name."'");
		return $query->getResult('array');
	}

	public function deleteItemImage($id){
		return $this->db->table('item_image')->delete(array('item_id'=>$id));
	}

	public function deleteCollection($id){
		return $this->db->table('collection')->delete(array('item_id'=>$id));
	}

	public function deleteItem($id){
		return $this->db->table('item')->delete(array('item_id'=>$id));
	}
}