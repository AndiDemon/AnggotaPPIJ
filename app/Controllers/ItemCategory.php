<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_itemcategory;

class ItemCategory extends BaseController
{

	protected $M_user;
	public function __construct(){
		$this->M_itemcategory = new M_itemcategory();
		
	}

	public function index()
	{
		$data = [
					'category' => $this->M_itemcategory->get_category(),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/ItemCategory/item_category',$data);
		echo view('superuser/footer-table');
	}

	public function create($send=['warning'=>'','category'=>'']){
		$data['send']=$send;
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/ItemCategory/create',$data);
		echo view('superuser/footer-table');
	}

	public function save(){
		$data = [
				'category' => $this->request->getPost('category'),
		];

		//name validation
		$checkName = $this->M_itemcategory->get_categoryWhere($data['category']);
		if ($checkName!=null){
			$send = [
						'warning' => 'We have that category already!',
						'category' => $data['category'],
				];
			$this->create($send);
		} else{
			$this->M_itemcategory->insertCategory($data);
			return redirect()->to(base_url('itemcategory'));
		}
	}

	public function edit($id, $send=['warning'=>'']){
		$category = $this->M_itemcategory->get_categoryID($id);
		$data['category'] = $category[0];
		$data['send'] = $send;

		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/ItemCategory/edit',$data);
		echo view('superuser/footer-table');
	}

	public function update(){
		$data = [
				'category' => $this->request->getPost('category'),
		];

		$this->M_itemcategory->updateCategory($data,$this->request->getPost('category_id'));
		return redirect()->to(base_url('itemcategory'));
	}

	public function delete($id){
		$this->M_itemcategory->deleteCategory($id);
		return redirect()->to(base_url('itemcategory'));
	}

}
