<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;

class Front extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_user = new M_user();
	}

	public function index()
	{
		//$data['countUser'] = $this->M_user->get_countUser();

		//session()->setFlashdata('error','Hmm! it looks like someone has taken that name');
		
		echo view('front/header');
		if(session()->get('user_level_id')==5){
			echo view('front/navigation-account');

			//put another feature
			echo view('front/start');
		} else {
			echo view('front/navigation');
			echo view('front/start');
		}
		echo view('front/partner');
		echo view('front/features');
		echo view('front/team');
		echo view('front/section-open');
		//echo view('front/rates');
		echo view('front/blog');
		echo view('front/section-close');
		echo view('front/subscription');
		echo view('front/footer');
		
	}

}
