<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_core;


class School extends BaseController
{
	protected $M_core;
	public function __construct(){
		$this->M_core = new M_core();
		
	}

	public function index(){

		$data = [
					'school' => $this->M_core->get_school(),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/school/school',$data);
		echo view('superuser/footer-table');
	}

	public function create(){
		$data = [
					'komsat' => $this->M_core->get_komsat(),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/school/create',$data);
		echo view('superuser/footer-table');
	}

	public function save(){
		$data = [
				'komsat_id' => $this->request->getPost('komsat_id'),
				'school_name' => $this->request->getPost('school_name'),
				'description' => $this->request->getPost('description'),
		];

		$this->M_core->insertSchool($data);

		return redirect()->to(base_url('school'));
	}

	public function edit($id, $send=['warning'=>'']){
		$data = [
					'komsat' => $this->M_core->get_komsat(),
				];
		$school = $this->M_core->get_schoolWhere($id);
		$data["school"] = $school[0];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/school/edit',$data);
		echo view('superuser/footer-table');
	}

	public function update(){
		$id = $this->request->getPost('school_id');
		$data = [
				'komsat_id' => $this->request->getPost('komsat_id'),
				'school_name' => $this->request->getPost('school_name'),
				'description' => $this->request->getPost('description'),
		];

		$this->M_core->updateSchool($data,$id);
		return redirect()->to(base_url('school'));
	}

	public function delete($id){
		$this->M_core->deleteSchool($id);
		return redirect()->to(base_url('school'));
	}

	public function detail($id){
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		//echo view('superuser/widget',$data);
		echo view('superuser/traffic');
		echo view('superuser/order');
		//echo view('superuser/todolivechat');
		echo view('superuser/calender');
		echo view('superuser/footer');
	}

}