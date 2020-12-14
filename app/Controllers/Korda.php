<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_core;


class Korda extends BaseController
{
	protected $M_core;
	public function __construct(){
		$this->M_core = new M_core();
		
	}

	public function index(){

		$data = [
					'korda' => $this->M_core->get_korda(),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/korda/korda',$data);
		echo view('superuser/footer-table');
	}

	public function create(){
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/korda/create');
		echo view('superuser/footer-table');
	}

	public function save(){
		$data = [
				'korda_name' => $this->request->getPost('korda_name'),
				'description' => $this->request->getPost('description'),
		];

		$this->M_core->insertKorda($data);

		return redirect()->to(base_url('korda'));
	}

	public function edit($id, $send=['warning'=>'']){
		//echo $id;
		$korda = $this->M_core->get_kordaWhere($id);
		$data["korda"] = $korda[0];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/korda/edit',$data);
		echo view('superuser/footer-table');
	}

	public function update(){
		$data = [
				'korda_id' => $this->request->getPost('korda_id'),
				'korda_name' => $this->request->getPost('korda_name'),
				'description' => $this->request->getPost('description'),
		];

		$this->M_core->updateKorda($data,$data['korda_id']);
		return redirect()->to(base_url('korda'));
	}

	public function delete($id){
		$this->M_core->deleteKorda($id);
		return redirect()->to(base_url('korda'));
	}

	public function detail($id){
		$data = [
					'komsat' => $this->M_core->get_komsatWhereKorda($id),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		//echo view('superuser/widget',$data);
		echo view('superuser/traffic');
		echo view('superuser/korda/order',$data);
		//echo view('superuser/todolivechat');
		echo view('superuser/calender');
		echo view('superuser/footer');
	}

}