<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;


class Userlevel extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_user = new M_user();
		
	}

	public function index(){

		$data = [
					'userlevel' => $this->M_user->get_user_level(),
				];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/user_level/user_level',$data);
		echo view('superuser/footer-table');
	}

	public function create(){
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/user_level/create');
		echo view('superuser/footer-table');
	}

	public function save(){
		$data = [
				'user_level_name' => $this->request->getPost('user_level_name'),
		];

		$this->M_user->insertUserLevel($data);

		return redirect()->to(base_url('userlevel'));
	}

	public function edit($id, $send=['warning'=>'']){
		//echo $id;
		$userlevel = $this->M_user->get_userlevelWhere($id);
		$data["userlevel"] = $userlevel[0];
		echo view('superuser/header');
		echo view('superuser/leftPanel');
		echo view('superuser/rightPanel');
		echo view('superuser/user_level/edit',$data);
		echo view('superuser/footer-table');
	}

	public function update(){
		$data = [
				'user_level_id' => $this->request->getPost('user_level_id'),
				'user_level_name' => $this->request->getPost('user_level_name'),
		];

		$this->M_user->updateUserLevel($data,$data['user_level_id']);
		return redirect()->to(base_url('userlevel'));
	}

	public function delete($id){
		$this->M_user->deleteUserLevel($id);
		return redirect()->to(base_url('userlevel'));
	}

}