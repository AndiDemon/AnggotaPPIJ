<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;


class Member extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_user = new M_user();
		
	}

	public function index(){

		$data = [
					'member' => $this->M_user->get_member(),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/member/member',$data);
		echo view('superuser/footer-table');
	}

	public function create(){
		$data = [
					'school' => $this->M_user->get_school(),
				];

		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/member/create',$data);
		echo view('superuser/footer-table');
	}

	private function generateID(){
		$id = rand(1,9999);
		$idx = '';
		if ($id <= 9){ $idx='000'.$id; }
		elseif ($id > 9 && $id<=99) { $idx='00'.$id; }
		elseif ($id > 99 && $id<=999) { $idx='0'.$id; }
		elseif ($id > 999 && $id<=9999) { $idx=''.$id; }
		
		//check to database
		$checkID = $this->M_user->getID($idx);
		if ($checkID!=null){
			$this->generateID();
		} else{ echo "success";}

		return $idx;
	}

	public function save(){
		//insert account table
		$id = $this->generateID();
		$account = [
				'account_id' => 'ang'.$id,
				'account_name' => $this->request->getPost('komsat_name'),
				'account_password' => $this->request->getPost('description'),
				'user_level_id' => 5,
		];

		//name validation
		$checkName = $this->M_user->getName($data['account_name']);
		if ($checkName!=null){
			$send = [
						'warning' => 'Sorry, the username has been taken!',
						'account_name' => $data['account_name'],
						'email' => $data['email'],
						'password' => $data['password'],
						'repassword' => $data['repassword'],
						'contact' => $data['contact'],
						'address' => $data['address'],
						'user_level_id' => $data['user_level_id'],
				];
			$this->create($send);
		}

		//password validation
		if ($data['password']!=$data['repassword']){
			session()->setFlashdata('failed','Passwords are not the same !!');
			return redirect()->to(base_url('login/en'));
			
			$send = [
						'warning' => 'The input password are not the same!',
						'account_name' => $data['account_name'],
						'email' => $data['email'],
						'password' => $data['password'],
						'repassword' => $data['repassword'],
						'contact' => $data['contact'],
						'address' => $data['address'],
						'user_level_id' => $data['user_level_id'],
				];
			$this->create($send);
		} 

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

	public function jurnal($id){
		$data = [
					'jurnal' => $this->M_user->get_jurnalWhereMember($id),
				];

		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/member/jurnal',$data);
		echo view('superuser/footer-table');
	}

}