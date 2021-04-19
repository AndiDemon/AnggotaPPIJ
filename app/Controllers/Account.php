<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;

class Account extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_user = new M_user();
	}

	public function info(){
		//$data['countUser'] = $this->M_user->get_countUser();
		
		if(session()->get('user_level_id')!=5){
			session()->setFlashdata('failed','You are not logged in !!');
			return redirect()->to(base_url('login'));
		}

		$data['user'] = $this->M_user->get_memberWhere(session()->get('id'));
		$data['afiliasi'] = $this->M_user->get_afiliasi($data['user'][0]['afiliasi_id']);

		echo view('front/header');
		echo view('front/navigation-account');
		echo view('front/account-profile',$data);
		echo view('front/account-profile-full',$data);
		echo view('front/footer');
	}

	public function updateMember(){
		$data=[
			'member_id' => $this->request->getPost('member_id'),
			'fullname' => $this->request->getPost('fullname'),
			'birthdate' => $this->request->getPost('birthdate'),
			'contact' => $this->request->getPost('contact'),
			'emergency_jp' => $this->request->getPost('emergency_jp'),
			'emergency_id' => $this->request->getPost('emergency_id'),
			'address_jp' => $this->request->getPost('address_jp'),
			'address_id' => $this->request->getPost('address_id'),
			'avatar' => $this->request->getPost('avatar'),
			'description' => $this->request->getPost('description'),
		];

		//var_dump($data);
		$this->M_user->updateMember($data);
		return redirect()->to(base_url('account/info'));
	}

}
