<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_core;


class Komsat extends BaseController
{
	protected $M_core;
	public function __construct(){
		$this->M_core = new M_core();
		
	}

	public function index(){

		$data = [
					'komsat' => $this->M_core->get_komsat(),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/komsat/komsat',$data);
		echo view('superuser/footer-table');
	}

	public function create(){
		$data = [
					'korda' => $this->M_core->get_korda(),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/komsat/create',$data);
		echo view('superuser/footer-table');
	}

	public function save(){
		$data = [
				'komsat_name' => $this->request->getPost('komsat_name'),
				'description' => $this->request->getPost('description'),
				'korda_id' => $this->request->getPost('korda_id'),
		];

		$this->M_core->insertKomsat($data);

		return redirect()->to(base_url('komsat'));
	}

	public function edit($id, $send=['warning'=>'']){
		$data = [
					'korda' => $this->M_core->get_korda(),
				];
		$komsat = $this->M_core->get_komsatWhere($id);
		$data["komsat"] = $komsat[0];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/komsat/edit',$data);
		echo view('superuser/footer-table');
	}

	public function update(){
		$data = [
				'komsat_id' => $this->request->getPost('komsat_id'),
				'korda_id' => $this->request->getPost('korda_id'),
				'komsat_name' => $this->request->getPost('komsat_name'),
				'description' => $this->request->getPost('description'),
		];

		$this->M_core->updateKomsat($data,$data['komsat_id']);
		return redirect()->to(base_url('komsat'));
	}

	public function delete($id){
		$this->M_core->deleteKomsat($id);
		return redirect()->to(base_url('komsat'));
	}

	public function detail($id){
		$data = [
					'school' => $this->M_core->get_schoolWhereKomsat($id),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		//echo view('superuser/widget',$data);
		echo view('superuser/traffic');
		echo view('superuser/komsat/order',$data);
		//echo view('superuser/todolivechat');
		echo view('superuser/calender');
		echo view('superuser/footer');
	}

}