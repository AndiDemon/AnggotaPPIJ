<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;

class Account extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_user = new M_user();
	}

	public function info()
	{
		//$data['countUser'] = $this->M_user->get_countUser();
		
		if(session()->get('user_level_id')!=5){
			session()->setFlashdata('failed','You are not logged in !!');
			return redirect()->to(base_url('login'));
		}

		echo view('front/header');
		echo view('front/navigation-account');
		echo view('front/account-profile');
		echo view('front/account-profile-full');
		echo view('front/footer');
	}

}
