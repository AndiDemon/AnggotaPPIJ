<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_user;

class Home extends BaseController
{
	protected $M_user;
	public function __construct(){
		$this->M_user = new M_user();
	}

	public function index()
	{
		//$data['countUser'] = $this->M_user->get_countUser();
		
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
