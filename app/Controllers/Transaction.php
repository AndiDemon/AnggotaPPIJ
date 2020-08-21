<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_transaction;

class Transaction extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_transaction = new M_transaction();
		helper('form');
	}
	public function index()
	{
		$data['transaction'] = $this->M_transaction->get_transaction();
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/transaction/transaction',$data);
		echo view('superuser/footer-table');
	}


	public function create($send=['warning'=>''])
	{
		$data['account'] = $this->M_transaction->get_account();
		$data['item'] = $this->M_transaction->get_item();
		$data['send'] = $send;
		//$data['itemDetail'] = $this->M_item->get_itemDetail($id);

		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/transaction/create',$data);
		echo view('superuser/footer-select');
	}

	function fetch_item(){
		if($this->input->post('user_id')){
			$user_id = $this->M_transaction->getUserID($this->input->post('user_id'));
			echo $user_id;
			echo $this->M_transaction->fetch_item($this->input->post('user_id'));
		} else{
			echo "masuk di else";
		}
	}

}
