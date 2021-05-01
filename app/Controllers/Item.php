<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_item;
use CodeIgniter\I18n\Time;

class Item extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_item = new M_item();
		helper('form');
	}

	public function index()
	{
		$data['item'] = $this->M_item->get_item();
		$data['validation'] = $this->validator;
	
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/item/item',$data);
		echo view('superuser/footer-table');
	}

	public function detail($id)
	{
		$data['itemPhoto'] = $this->M_item->get_itemImage($id);
		$data['itemDetail'] = $this->M_item->get_itemDetail($id);

		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/item/detail',$data);
		echo view('superuser/footer-table');
	}

	public function create($send=['warning'=>''])
	{
		$data['account'] = $this->M_item->get_account();
		$data['category'] = $this->M_item->get_category();
		$data['send'] = $send;
		//$data['itemDetail'] = $this->M_item->get_itemDetail($id);

		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/item/create',$data);
		echo view('superuser/footer-item');
	}
	public function save(){
		
		if($this->request->getMethod()!=='post'){
			return redirect()->to(base_url('item'));
		}
		
		//variable to make item_id
		$randomNumber = rand(0000,9999);
		$time = date("Y-m-d")."".date("h:i:s");
		echo $time;
		$item_id = "item".$randomNumber."".$time;
		$file_images = $this->request->getFiles();
		if ($file_images){
			$count = 1;
			foreach ($file_images['images'] as $key => $img) {
				//=====================================================
				//======WE NEED TO VALIDATE THE IMAGE UPLOAD FORM======
				//=====================================================
				// $validated = $this->validate([
				// 	'image' => 'uploaded[image]|mime_in[image,image/jpg,image/png,image/jpeg]|max_size[image,5000]'
				// ]);
				// if ($validated == FALSE){
				// 	//return $this->index();
				// 	echo "false";
				// } else{
				//=====================================================
				//======WE NEED TO VALIDATE THE IMAGE UPLOAD FORM======
				//=====================================================
				$extensionBreak = explode('.',$img->getName());
				$extension = end($extensionBreak);
				$newName = "item".$randomNumber."".$count."".$time.".".$extension;
				$file_image = $this->request->getFiles();
				$img->move(ROOTPATH.'public/upload', $newName);

				//insert to database
				$itemImage = [
					'item_id' 	=> $item_id,
					'image'		=> $newName,
				];
				$this->M_item->insertItemImage($itemImage);

				$count++;
				//}
			}
		}

		$account_name = $this->request->getPost('account_name');
		$user_id = $this->M_item->getUserID($account_name);
		$user_id = $user_id[0]['user_id'];
		$item = [
			'item_id' 	=> $item_id,
			'item_name' => $this->request->getPost('item_name'),
			'item_qty' => $this->request->getPost('item_qty'),
			'item_detail' => $this->request->getPost('item_detail'),
			'category_id' => $this->request->getPost('category'),
		];

		$available = strtotime($this->request->getPost('available_date'));
		$available_date = date('Y-m-d',$available);
		$expired = strtotime($this->request->getPost('expired_date'));
		$expired_date = date('Y-m-d',$expired);

		$collection = [
			'user_id' 	=> $user_id,
			'item_id'	=> $item_id,
			'available_date' => $available_date,
			'expired_date' => $expired_date,
		];

		$this->M_item->insertItem($item);
		$this->M_item->insertCollection($collection);
		return $this->index();
		//}
		
	}

	public function delete($id){
		$this->M_item->deleteItemImage($id);
		$this->M_item->deleteCollection($id);
		$this->M_item->deleteItem($id);
		return redirect()->to(base_url('item'));
	}

}
